<?php
class Subscription_model extends CI_Model{
	
    public function insert($data){
		$this->db->insert('subscriptions', $data);
		return true;
	}
       
    
    public function get_all_subscriptions() {
        $this->db->select('*');
        $this->db->from('subscriptions');
        $query = $this->db->get();

        return $query->result();
    }
    
    public function delete_subscriptions($id){
		$this->db->where('id_subscriptions', $id);
		$this->db->delete('subscriptions');
		return true;
	}
}