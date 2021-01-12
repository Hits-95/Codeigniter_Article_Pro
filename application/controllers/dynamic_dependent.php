<?php
	/**
	 * Dynamic dependant class
	 */
	class Dynamic_Dependent extends MY_controller {
		public function __construct() {
			parent::__construct();
   			$this->load->model('dynamic_dependent_model');
		}

		public function index() {
			$data['country'] = $this->dynamic_dependent_model->fetch_country();
			$this->load->view("users/dynamic_dependent", $data);
		}

		public function fetch_state(){
			if($this->input->post("country_id")){
				echo $this->dynamic_dependent_model->fetch_state($this->input->post("country_id"));
			}
		}

		public function fetch_city(){
			if($this->input->post("state_id")){
				echo $this->dynamic_dependent_model->fetch_city($this->input->post("state_id"));
			}
		}
	}


?>