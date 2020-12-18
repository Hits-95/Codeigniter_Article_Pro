<?php
	class Export_Model extends CI_Model { 
		//get employee feedback list...
		public function getFeedbackList() {
			$result = $this->db->select(['id', 'name', 'email', 'feedback'])
							   ->from('feedback')
							   ->get();
			return $result->result();
			
		}
	}
?>