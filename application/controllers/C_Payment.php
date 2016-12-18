<?php
	class C_Payment extends CI_Controller{
		public function pay($param = NULL){
			$data['header'] = $this->load->view('templates/header','',TRUE);
			$data['nav']    = $this->load->view('templates/nav','',TRUE);
			$data['footer'] = $this->load->view('templates/footer','',TRUE);

			if($param == 'estore'){
				$this->session->set_flashdata('estore_pay',TRUE);
				$this->session->unset_userdata('booking_pay');
			} elseif ($param == 'booking') {
				$this->session->set_flashdata('booking_pay',TRUE);
				$this->session->unset_userdata('estore_pay');
			}

			$this->load->view('payment/payment', $data);
		}
	}
?>