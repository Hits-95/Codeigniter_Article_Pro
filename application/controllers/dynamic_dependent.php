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
			$this->dynamic_dependent_model->temp();
		}
	}


?>