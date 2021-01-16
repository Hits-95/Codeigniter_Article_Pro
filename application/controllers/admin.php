<?php

	class Admin extends MY_controller {
		public function __construct() {
   			parent::__construct();
   			
   			if( ! $this->session->userdata('id') )
    			return redirect('login/');
    	}
		//wel-come function called by login
		public function welcome() {
			$this->load->model('loginmodel');
			$this->load->library('pagination');

			$this->session->unset_userdata('action'); //for cancel edite action 

			$config = [
				'base_url'       => base_url('admin/welcome'),
				'per_page'       => 3,
				'total_rows'     => $this->loginmodel->num_rows(),

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

			$this->pagination->initialize($config);

			$articles = $this->loginmodel->articleList($config['per_page'], $this->uri->segment(3));
			$this->load->view('admin/dashboard',['articles' => $articles]);
		}//end of welcome

		//add article 
		public function add_article() {
			$this->load->view('admin/add_article');
		}

		//Delete Article 
		public function del_article() {
			$id = $this->input->post('id');
			$this->load->model('loginmodel');
			if($this->loginmodel->del_article($id)){
				$this->session->set_flashdata('msg', '<strong>Successfully !!!</strong> Article Deleted.');
				$this->session->set_flashdata('msg_class', 'alert alert-success');
			}else{
				$this->session->set_flashdata('msg', '<strong>Plase Try Again !!!</strong> Article Not Deleted.');
				$this->session->set_flashdata('msg_class', 'alert alert-danger');
			}
			return redirect('admin/welcome');// alert sms on dashboard..
		}

		//edit article
		public function edit_article($article_id) {
			$this->session->set_userdata('action', "update_article");

			$this->load->model('loginmodel');
			$article = $this->loginmodel->find_article($article_id);
			$this->load->view('admin/add_article',['article' => $article]);
		}

		//update article
		public function update_article($article_id){
			if($this->form_validation->run('add_article_rules')){	
				$new_article = $post = $this->input->post();
				$this->load->model('loginmodel');

				//$this->session->unset_userdata('action');

				if($this->loginmodel->update_article($article_id, $new_article)){
					$this->session->set_flashdata('msg', '<strong>Successfully !!!</strong> Article updated.');
					$this->session->set_flashdata('msg_class', 'alert alert-success');
					$this->session->unset_userdata('action');
				}
                else{
					$this->session->set_flashdata('msg', '<strong>Article Not Updated!!!</strong> Plase Try Again...');
					$this->session->set_flashdata('msg_class', 'alert alert-danger');
                }
				return redirect('admin/welcome');// alert sms on dashboard..
			}else{
				$this->load->view('admin/add_article');
			}
		}

		//upload image into ./upload/ folder and insert into database.....
		public function userValidation(){
			$config=[
				'upload_path'=>'./upload/',
				'allowed_types'=>'gif|jpg|png|jpeg',
			];
               
			$this->load->library('upload',$config);
  			if($this->form_validation->run('add_article_rules') && $this->upload->do_upload()){
     			
     			$post = $this->input->post(); 
					
     			$data=$this->upload->data();

				$image_path = base_url("upload/".$data['raw_name'].$data['file_ext']);
     			//echo $image_path;
       			$post['image_path']=$image_path;
      			$this->load->model('loginmodel','useradd');

     //  			print_r($post);
					// exit();     

     			if($this->useradd->add_article($post)){
         			$this->session->set_flashdata('msg', '<strong>Successfully !!!</strong> Article Added.');
					$this->session->set_flashdata('msg_class', 'alert alert-success');
      			} else { 
			       $this->session->set_flashdata('msg', '<strong>Article Not Added !!!</strong> Plase Try Again...');
					$this->session->set_flashdata('msg_class', 'alert alert-danger');
      			}
      			return redirect('admin/welcome');
			} else {
 				$upload_error=$this->upload->display_errors();
 				// echo $upload_error;
  				$this->load->view('admin/add_article',compact('upload_error'));
  			}

 		}

		//log out function
       	public function logout() {
       		$this->session->unset_userdata('id');
       		return redirect('login/');
       	}//end of log out

	}//end of admin
?>  