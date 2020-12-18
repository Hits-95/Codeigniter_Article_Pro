<?php
	class Users extends MY_Controller {
		public function __construct() {
			parent::__construct();
			// if(!$this->session->userdata('id'))
			// 	return redirect('login/');	
		}

		public function index() {
			$this->load->view('users/homePage');
		}
		//register new user function
		public function register() {
			$this->load->view('admin/register');
		}

	}//end of user

?>