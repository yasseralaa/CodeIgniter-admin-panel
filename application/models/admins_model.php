<?php
class Admins_model extends CI_Model{
	
	public function get_admins($order_by = null, $sort = 'DESC', $limit = null, $offset = 0){
		$this->db->select('*');
		$this->db->from('admins');
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
	public function get_admin($id){
		$this->db->where('id',$id);
		$query = $this->db->get('admins');
		return $query->row();
	}
	
	/**
	 * Insert
	 *
	 * @param - (array) $data
	 **/
	public function insert($data){
		$this->db->insert('admins', $data);
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
		$this->db->update('admins', $data);
		return true;
	}
	
	/*
	 * Delete
	*
	* @param - (int) $id
	*/
	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('admins');
		return true;
	}
	
	
	
}