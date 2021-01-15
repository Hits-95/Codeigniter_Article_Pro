<?php
	class Users extends MY_Controller {
		public function __construct() {
			parent::__construct();
			// if(!$this->session->userdata('id'))
			// 	return redirect('login/');	
		}

		public function index() {
			$this->load->model('loginmodel');
			$this->load->library('pagination');

			$config = [
				'base_url'       => base_url('admin/welcome'),
				'per_page'       => 2,
				'total_rows'     => $this->loginmodel->all_article_count(),

				'full_tag_open'  => "<ul class='pagination'>",
        		'full_tag_close' => "</ul>",
        		'next_tag_open'  => "<li class = 'page-item page-link'>",
        		'next_tag_close' => "</li>",
        		'prev_tag_open'  => "<li class = 'page-item page-link'>",
        		'prev_tag_close' => "</li>",
        		'num_tag_open'   => "<li class = 'page-item page-link'>",
        		'num_tag_close'  => "</li>",
        		'cur_tag_open'   => "<li class='page-item active'><a class = 'page-link'>",
        		'cur_tag_close'  => "</a></li>",
        		'first_tag_open' => "<li class = 'page-item page-link'>",
        		'first_tag_close' =>"</li>",
        		'last_tag_open' => "<li class = 'page-item page-link'>",
        		'last_tag_close' =>"</li>",
    		];
 
			$this->load->view('users/homePage');
		}
		//register new user function
		public function register() {
			$this->load->view('admin/register');
		}

	}//end of user

?>