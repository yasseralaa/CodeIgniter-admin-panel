<?php
class Wishlist_model extends CI_Model{
	
    public function insert_Wish($products) {
        $this->db->insert('wishlist', $products);
		return true;
    }
    
   
    public function get_wishes($order_by = null, $sort = 'DESC', $limit = null, $offset = 0){
		$this->db->select('*');
		$this->db->from('wishlist');
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
    
        
        public function delete_wishes($id){
		$this->db->where('id', $id);
		$this->db->delete('wishlist', $data);
		return true;
	}
    
    
}