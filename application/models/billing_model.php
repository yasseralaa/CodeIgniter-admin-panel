<?php

class Billing_model extends CI_Model {
    

    // Insert customer details in "customer" table in database.
	public function insert_customerdetails($data)
	{
		$this->db->insert('customers_details', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;		
	}
	
        // Insert order date with customer id in "orders" table in database.	
   public function insert_order($data)
	{
		$this->db->insert('orders', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
    
        // Insert ordered product detail in "order_detail" table in database.
	public function insert_order_detail($data)
	{
		$this->db->insert('order_detail', $data);
	}
        
        public function get_orders($order_by = null, $sort = 'DESC', $limit = null, $offset = 0){
		$this->db->select('*');
		$this->db->from('orders');
		if($limit != null){
			$this->db->limit($limit, $offset);
		}
		if($order_by != null){
			$this->db->order_by($order_by, $sort);
		}
		$query = $this->db->get();
		return $query->result();
	}
    
        public function get_orders_details($order_by = null, $sort = 'DESC', $limit = null, $offset = 0){
		$this->db->select('*');
		$this->db->from('order_detail');
		if($limit != null){
			$this->db->limit($limit, $offset);
		}
		if($order_by != null){
			$this->db->order_by($order_by, $sort);
		}
		$query = $this->db->get();
		return $query->result();
	}
        
        public function get_customers($order_by = null, $sort = 'DESC', $limit = null, $offset = 0){
		$this->db->select('*');
		$this->db->from('customers_details');
		if($limit != null){
			$this->db->limit($limit, $offset);
		}
		if($order_by != null){
			$this->db->order_by($order_by, $sort);
		}
		$query = $this->db->get();
		return $query->result();
	}
        public function delete_orders($id){
		$this->db->where('id', $id);
		$this->db->delete('orders');
		return true;
	}
        public function delete_customers($id){
		$this->db->where('id', $id);
		$this->db->delete('customers_details');
		return true;
	}
        public function delete_searches($id){
		$this->db->where('search_id', $id);
		$this->db->delete('searches');
		return true;
	}
}