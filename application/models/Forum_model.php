<?php
	class Forum_model extends CI_Model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
			$this->load->helper('date');
			date_default_timezone_set('Asia/Jakarta');
		}

		public function add_forum($username){
			$forumid = $this->Sequences_model->concat(2, mdate('%Y-%m-%d %H:%i:%s',now()));
			$data = array(
				'FORUM_ID' => $forumid,
				'FORUM_TITLE'=> $this->input->post('title'),
				'FORUM_CAT' => $this->input->post('category'),
				'FORUM_CONTENT' => $this->input->post('content'),
				'USER_ID' => $username,
				'USER_DT' => mdate('%Y-%m-%d %H:%i:%s',now())
			);
			$this->db->insert('TRHFORUM',$data);
			$this->Sequences_model->update_seq(2);
			return $this->db->error();
		}

		//detail
		public function add_forum_detail($parent_id, $content, $username){
			$detailid = $this->Sequences_model->concat(3, mdate('%Y-%m-%d %H:%i:%s',now()));
			$data = array(
				'PARENT_ID' => $parent_id,
				'DETAIL_ID' => $detailid,
				'FORUM_CONTENT' => $content,
				'USER_ID' => $username,
				'USER_DT' => mdate('%Y-%m-%d %H:%i:%s',now())
			);
			$this->db->insert('TRDFORUM',$data);
			$this->Sequences_model->update_seq(3);
			return $this->db->error();
		}

		//header
		public function get_category(){
			$this->db->select('CAT_ID,CAT_NAME',3);
			$this->db->from('MSDCATEGORY');
			$this->db->where('CAT_GROUP',3);
			$this->db->order_by('CAT_ID');
			$result = $this->db->get();
			$return = array();
			if($result->num_rows() > 0){
				foreach ($result->result_array() as $row) {
					$return[$row['CAT_ID']] = $row['CAT_NAME'];
				}
			};
			return $return;
		}

		public function get_forum_header(){
			$this->db->select('A.FORUM_ID,A.FORUM_TITLE,B.CAT_NAME,A.FORUM_CONTENT,A.USER_ID,A.USER_DT');
			$this->db->from('TRHFORUM A');
			$this->db->join('MSDCATEGORY B','A.FORUM_CAT = B.CAT_ID','LEFT');
			$this->db->order_by('A.FORUM_ID');
			$result = $this->db->get();
			return $result->result_array();
		}

		public function get_forum_header_by_id($forum_id){
			$this->db->where('FORUM_ID', $forum_id);
			$this->db->join('MSTUSER', 'MSTUSER.USER_ID = TRHFORUM.USER_ID');
			$query = $this->db->get('TRHFORUM');
			return $query->result_array();
		}

		public function get_forum_parent_by_id($parent_id){
			$header = $this->get_forum_header_by_id($parent_id);
			if($header == NULL){
				$this->db->where('DETAIL_ID', $parent_id);
				$this->db->join('MSTUSER', 'MSTUSER.USER_ID = TRDFORUM.USER_ID');
				$query = $this->db->get('TRDFORUM');
				return $query->result_array()[0];
			} else{
				return $header[0];
			}
		}

		public function get_header_id_by_grandchild_id($grd_id){
			$id = array(array('PARENT_ID' => $grd_id));

			while($id != NULL) {
				$temp_id = $id;
				$this->db->select('PARENT_ID');
				$this->db->from('TRDFORUM');
				$this->db->where('DETAIL_ID', $id[0]['PARENT_ID']);
				$id = $this->db->get()->result_array();
			}

			$this->db->where('FORUM_ID', $temp_id[0]['PARENT_ID']);
			$query = $this->db->get('TRHFORUM');
			return $query->result_array()[0]['FORUM_ID'];
		}

		private $f_detail = array();

		public function get_forum_detail($parent_id, $level = 0){
			$this->db->order_by('USER_DT');
			$this->db->where('PARENT_ID', $parent_id);
			$query = $this->db->get('TRDFORUM');
			$f_detail = $query->result_array();

			//head comment
			if ($f_detail != null) {
				for($i = 0; $i < count($f_detail); $i++) {
					$childrens = $this->get_forum_detail($f_detail[$i]['DETAIL_ID'], $level+1);
					$f_detail[$i]['LEVEL'] = $level;
					$f_detail[$i]['CHILDREN'] = $childrens;
				}
			}

			return $f_detail;
		}
	}
?>