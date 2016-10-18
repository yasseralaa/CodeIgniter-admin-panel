<?php

class Subcategory_model extends CI_Model {

    public function insert_category($data){
		$this->db->insert('sub_categories', $data);
		return true;
	}
    
    public function get_subcategories($order_by = null, $sort = 'DESC', $limit = null, $offset = 0){
		$this->db->select('*');
		$this->db->from('sub_categories');	
		
		if($order_by != null){
			$this->db->order_by($order_by, $sort);
		}
		$query = $this->db->get();
		return $query->result();
	}
        
        public function get_subcategory($id){
		$this->db->where('id',$id);
		$query = $this->db->get('sub_categories');
		return $query->row();
	}

    
        
        public function update_subcategory($data, $id){
		$this->db->where('id', $id);
		$this->db->update('sub_categories', $data);
		return true;
	}
        
        
        
        public function delete_subcategory($id){
		$this->db->where('id', $id);
		$this->db->delete('sub_categories');
		return true;
	}
        
        public function delete_subcategorywithcategory($id){
		$this->db->where('category_id', $id);
		$this->db->delete('sub_categories');
		return true;
	}
        
        public function delete_allchecked($checked){
            foreach ($checked as $id):
		$this->Subcategory_model->delete_subcategory($id);
               $this->Product_model->delete_productssubCategoryID($id);
                 endforeach;
		return true;
	}
    
}