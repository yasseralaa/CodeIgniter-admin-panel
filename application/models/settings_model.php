<?php
class Settings_model extends CI_Model{
	/*
	* Get global settings
	*/
	public function get_global_settings(){
		$query = $this->db->get('settings');
		$result = $query->result();
		return $result;
	}
}