<?php
	class Login extends MY_Controller {
        public function __construct() {
            parent::__construct();
            if($this->session->userdata('id') )
                return redirect('admin/welcome');
        }

		public function index() {
            $this->form_validation->set_rules('username', 'User-Name', 'required|alpha');
            $this->form_validation->set_rules('password', 'Password', 'required|max_length[12]');
            $this->form_validation->set_error_delimiters("<div class = 'alert alert-danger'>","</div>");

            if($this->form_validation->run()){
            	$username = $this->input->post('username');
            	$password = $this->input->post('password');
            	$this->load->model('loginmodel');
            	$login_id = $this->loginmodel->isValidate($username, $password);
            
            	if($login_id){
            		$this->session->set_userdata('id', $login_id);    //insert user id in session
            		return redirect('admin/welcome'); //successful login call welcome function...
            	}else{
            		$this->session->set_flashdata('login_failed', '<strong>Invalide!!!</strong> Username/Password...');
                    return redirect('login/');
            	}
            }else{
            	$this->load->view('admin/login');
            }
       	}// end of login()

		//sendMail function
		public function sendEmail() {
			$this->form_validation->set_rules('username', 'User-Name', 'required|alpha');
            $this->form_validation->set_rules('password', 'Password', 'required|max_length[12]');
            $this->form_validation->set_rules('firstname','First Name', 'required|alpha');
            $this->form_validation->set_rules('lastname', 'Last Name', 'required|alpha');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_error_delimiters("<div class = 'alert alert-danger'>","</div>");
        	
        	if($this->form_validation->run()){

                $post = $this->input->post();
                $this->load->model('loginmodel');
                if($this->loginmodel->add_user($post)){
                    $this->session->set_flashdata('msg', '<strong>Successfully !!!</strong> User Added.');
                    $this->session->set_flashdata('msg_class', 'alert alert-success');
                }
                else{
                    $this->session->set_flashdata('msg', '<strong>User Not Added !!!</strong> Plase Try Again...');
                    $this->session->set_flashdata('msg_class', 'alert alert-danger');
                }
                return redirect('users/register');// alert sms on register..

        		// $this->load->library('email');
        		// $this->email->from(set_value('email'),set_value('firstname'));
        		// $this->email->to('morankarnikita099@gmail.com');
        		// $this->email->subject('Testing');

        		// $this->email->message('testing');
        		// $this->email->set_newline('r\n');
        		// if($this->email->send()){
        		// 	echo "<script type='text/javascript'>alert('Your e-mail has been send !')</script>";
          //   		$this->load->view("admin/register");
        		// }else{
        		// 	show_error($this->email->print_debugger());
        		// }
        	}else{
        		$this->load->view('admin/register');
        	}


		}//end of sendMail
	}//end of admin clas

?>