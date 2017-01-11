<?php
	class Reminder_model extends CI_Model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();

			$this->load->helper('date');
			$userid = $this->session->userdata('username');
			$remind = $this->get_nearest_reminder($userid);
			if(!empty($remind)) {
				$timespan = mysql_to_unix($remind[0]['REMINDER_DT']) - now();
				if($timespan < 172800){
					$this->session->set_userdata('reminder','remind');
				}
			} else {
				$this->session->unset_userdata(array('reminder'));
			}
		}

		public function add_reminder(){
			$data = array(
				'USER_ID'       => $this->input->post('userid'),
				'REMINDER_DT'   => $this->input->post('reminder_dt'),
				'REMINDER_DESC' => $this->input->post('reminder_desc')
			);
			$this->db->insert('MSTREMINDER', $data);
			return $this->db->error();
		}

		public function get_reminder($username){
			$this->db->where('USER_ID', $username);
			$query = $this->db->get("MSTREMINDER");
			return $query->result_array();
		}

		public function get_nearest_reminder($username){
			$this->db->select('min(date(REMINDER_DT)) dt');
			$this->db->where('USER_ID', $username);
			$this->db->where('REMINDER_DT > DATE(NOW())');
			$where_clause = $this->db->get('MSTREMINDER')->result_array()[0]['dt'];

			$this->db->order_by('REMINDER_DT');
			$this->db->where('USER_ID', $username);
			$this->db->where('DATE(REMINDER_DT)', $where_clause);
			$query = $this->db->get('MSTREMINDER');

			return $query->result_array();
		}

		public function remove_reminder($username, $datetime){
			$this->db->where('USER_ID', $username);
			$this->db->where('REMINDER_DT', $datetime);
			$this->db->delete('MSTREMINDER');
			return $this->db->error();
		}
	}
?>