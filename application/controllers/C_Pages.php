<?php
	class C_Pages extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('Category_model');
			$this->load->model('Search_model');
		}
		public function view($page = 'home'){
			if($this->session->userdata('username') != null && $page == 'user'){
				redirect();
			}
			if(!file_exists(APPPATH.'/views/'.$page.'.php')){
				show_404();
			}

			$data['title']  = ucfirst($page);
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			$this->load->view($page, $data);
		}

		// suggestion and critics
		public function complain(){
			$this->form_validation->set_rules('email','Email','trim|valid_email');
			$this->form_validation->set_rules('txt','Subject','trim');
			$this->form_validation->set_rules('comment','Comment','trim');

			if($this->form_validation->run() == FALSE){
				$res = array(
					'status' => 'failed',
					'msg' => 'Whops something went wrong. Please try again later.'
				);
				print_r(json_encode($res));
			} else {
				$res = array(
					'status' => 'success',
					'msg' => 'Thank you for your comment.'
				);
				$this->load->model('Comment_model');
				$this->Comment_model->add_comment();
				print_r(json_encode($res));
			}
		}

		public function search(){
			$name = $this->input->get('src', TRUE);

			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			$data['doctor_search'] = $this->Search_model->get_doctor_by_name($name);
			$data['doc_cat'] = $this->Category_model->get_doctor_cat();
			$this->load->view('list', $data);
		}

		public function search_category(){
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			$cat_id = $this->input->get('doc_cat');
			$name = $this->input->get('src');

			$data['doctor_search'] = $this->Search_model->get_doctor_by_name_and_category($cat_id, $name);
			$data['doc_cat'] = $this->Category_model->get_doctor_cat();

			$this->load->view('list', $data);
		}
	}
?>
