<?php
class User_model extends CI_Model{
	
	public function get_users($order_by = null, $sort = 'DESC', $limit = null, $offset = 0){
		$this->db->select('*');
		$this->db->from('users');
		//conflict with admin panel Jquery
                /*if($limit != null){
			$this->db->limit($limit, $offset);
		}*/
		if($order_by != null){
			$this->db->order_by($order_by, $sort);
		}
		$query = $this->db->get();
		return $query->result();
	}
	
	/*
	 * Get Single User
	 */
	public function get_user($id){
		$this->db->where('id',$id);
		$query = $this->db->get('users');
		return $query->row();
	}
	
	/**
	 * Insert
	 *
	 * @param - (array) $data
	 **/
	public function insert($data){
		$this->db->insert('users', $data);
		return true;
	}
	
	
	
	/**
	 * Update
	 *
	 * @param - (array) $data
	 * @param - (int) $id
	 **/
	public function update($data, $id){
		$this->db->where('id', $id);
		$this->db->update('users', $data);
		return true;
	}
	
	/*
	 * Delete
	*
	* @param - (int) $id
	*/
	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('users', $data);
		return true;
	}
	
	
	
}