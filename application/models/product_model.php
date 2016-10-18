<?php

class Product_model extends CI_Model {

    public function insert_product($products) {
        $this->db->insert('products', $products);
		return true;
    }
    
    public function  insert_billing_details($billing_info){
        $this->db->insert('customers_details', $billing_info);
        return TRUE;
    }
    
    public function get_products($order_by = null, $sort='DESC', $limit = null, $offset = 0){
		$this->db->select('a.*, b.name as category_name, c.first_name, c.last_name');
		$this->db->from('products as a');
		$this->db->join('categories AS b', 'b.id = a.category_id','left');
		$this->db->join('admins AS c', 'c.id = a.user_id','left');
		//conflict with admin panel Jquery
                /*if($limit != null){
			$this->db->limit($limit, $offset);
		}*/
		$this->db->order_by("created","desc");
		$query = $this->db->get();	
		return $query->result();
	}
        
public function get_all_products() {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->order_by($order_by, $sort);
        $query = $this->db->get();

        return $query->result();
    }


    public function get_products_byid($id){
		$this->db->where('id',$id);
		$query = $this->db->get('products');
		return $query->row();
	}
        public  function get_product_by_id($id){
        $this->db->select('*');
        $where = "(id='$id')";
        $this->db->where($where);
        $query = $this->db->get('products');
        $data = $query->result();
        $pro =array();
        foreach ($data as $value){
            $pro =array(
                'id'=>$value->id,
                'product_name'=>$value->product_name,
                'product_price'=>$value->product_price,
                'category_id' =>$value->category_id,
                'product_currency'=>$value->product_currency,
                'product_description'=>$value->product_description,
                'merchant_email'=>$value->merchant_email,
                'product_image'=>$value->product_image,
				'payment_mode'=>$value->payment_mode,
            );
        }
        return $pro;
    }
        
        public function get_filtered_products($keywords, $order_by = null, $sort = 'DESC', $limit = null, $offset = 0){
		$this->db->select('a.*, b.name as category_name, c.first_name, c.last_name');
		$this->db->from('products as a');
		$this->db->join('categories AS b', 'b.id = a.category_id','left');
		$this->db->join('users AS c', 'c.id = a.user_id','left');
		$this->db->like('product_name', $keywords);
                $this->db->like('product_image', $keywords);
		$this->db->or_like('product_description', $keywords);
		if($limit != null){
			$this->db->limit($limit, $offset);
		}
		if($order_by != null){
			$this->db->order_by($order_by, $sort);
		}
		$query = $this->db->get();
		return $query->result();
	}
        
        public function update_products($data, $id){
		$this->db->where('id', $id);
		$this->db->update('products', $data);
		return true;
	}
        
        
        public function delete_products($id){
		$this->db->where('id', $id);
		$this->db->delete('products');
		return true;
	}

public function delete_allchecked($checked){
            foreach ($checked as $id):
		$this->db->where('id', $id);
		$this->db->delete('products');
                 endforeach;
		return true;
	}

        public function delete_productsCategoryID($id){
                $this->db->where('id',$id);
		$query = $this->db->select('products');
		
            
		$this->db->where('category_id', $id);
		$this->db->delete('products');
		return $query;
	}
        public function delete_productssubCategoryID($id){
		$this->db->where('subcategory_id', $id);
		$this->db->delete('products');
		return true;
	}

        
        public function get_categories($order_by = null, $sort = 'DESC', $limit = null, $offset = 0){
		$this->db->select('*');
		$this->db->from('categories');	
		if($limit != null){
			$this->db->limit($limit, $offset);
		}
		if($order_by != null){
			$this->db->order_by($order_by, $sort);
		}
		$query = $this->db->get();
		return $query->result();
	}
public function subcategory_exists($id) {
        $this->db->select('*');
        $this->db->from('sub_categories');
        $this->db->where('id', $id);
        $query = $this->db->get();

        return $query->result();
    }
    
}