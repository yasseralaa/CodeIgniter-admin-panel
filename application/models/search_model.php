<?php
class Search_model extends CI_Model{
	
    public function insert($data){
		$this->db->insert('searches', $data);
		return true;
	}
        

        
        public function get_searched_products($search) {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->like('product_name',$search);
        $this->db->or_like('product_description',$search);
        $query = $this->db->get();

        return $query->result();
    }
    
    public function get_all_searches() {
        $this->db->select('*');
        $this->db->from('searches');
        $query = $this->db->get();

        return $query->result();
    }
    
    
    
}