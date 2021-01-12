<?php
	class Dynamic_Dependent_Model extends CI_Model { 
		public function fetch_country() {
			$this->db->order_by("country_name", "ASC");
			$result = $this->db->get("country");
			return $result->result();
		}

		public function fetch_state($country_id){
			$this->db->where("country_id", $country_id);
			$this->db->order_by("state_name", "ASC");
			$result = $this->db->get("state")->result();
			$output = "<option value = ''> Select State </option>";
			foreach ($result as $row) {
				$output .= '<option value =" '.$row->state_id.'">'.$row->state_name."</option>";
			}
			return $output;
		} 

		public function fetch_city($state_id){
			$this->db->where("state_id", $state_id);
			$this->db->order_by("city_name", "ASC");
			$result = $this->db->get("city")->result();
			$output = "<option value = ''> Select City </option>";
			foreach ($result as $row) {
				$output .= '<option value =" '.$row->city_id.'">'.$row->city_name."</option>";
			}
			return $output;
		}
	}
?>