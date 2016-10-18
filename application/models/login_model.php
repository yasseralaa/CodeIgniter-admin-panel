<?php
class Login_model extends CI_Model{
	public function login_user($username, $password){
		//Secure password
        $enc_password = md5($password);

        //Validate
        $this->db->where('username',$username);
        $this->db->where('password',$enc_password);
        
        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return $result->row();
        } else {
            return false;
        }
	}
}