<?php
	class Categories_model extends CI_Model {
		
		public function getAlldata(){
			$data = $this->db->get("categories");
			return $data->result();

		}
	}
?>