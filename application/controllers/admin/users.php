<?php 
class users extends MY_Controller{
	public function __construct(){
		parent::__construct();
		
		//Access Control
		if(!$this->session->userdata('logged_in')){
			redirect('index.php/admin/authenticate/login');
		}
	}
	
	public function index(){
		//Get Users
		$data['users'] = $this->User_model->get_users();
		$data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
		//Views
        $data['main_content'] = 'admin/users/index';
        $this->load->view('admin/users/index', $data);
	}
	
	/*
	 * Add User
	*/
	public function add(){
            $data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
		//Validation Rules
		$this->form_validation->set_rules('first_name','First Name','trim|required|xss_clean');
		$this->form_validation->set_rules('last_name','Last Name','trim|required|xss_clean');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('username','Username','trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[confirm_password]');	
	
	
		if($this->form_validation->run() == FALSE){
			//Views
			$data['main_content'] = 'admin/users/add';
			$this->load->view('admin/users/add', $data);
		} else {
			//Create Data Array
			$data = array(
					'first_name'  	=> $this->input->post('first_name'),
					'last_name'   	=> $this->input->post('last_name'),
					'username' 		=> $this->input->post('username'),
					'password'    	=> md5($this->input->post('password')),
					'email'  	=> $this->input->post('email')
			);
				
			//Table Insert
			$this->User_model->insert($data);
				
			//Create Message
			$this->session->set_flashdata('user_saved', 'User has been saved');
				
			//Redirect to pages
			redirect('index.php/admin/users');
		}
	}
	
	/*
	 * Edit User
	*
	* @param - $id
	*/
	public function edit($id){
            $data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
		//Validation Rules
		$this->form_validation->set_rules('first_name','First Name','trim|required|xss_clean');
		$this->form_validation->set_rules('last_name','Last Name','trim|required|xss_clean');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('username','Username','trim|required|min_length[3]|xss_clean');
			
		$data['user'] = $this->User_model->get_user($id);
	
	
		if($this->form_validation->run() == FALSE){
			//Views
			$data['main_content'] = 'admin/users/edit';
			$this->load->view('admin/users/edit', $data);
		} else {
			//Create Data Array
			$data = array(
					'first_name'  	=> $this->input->post('first_name'),
					'last_name'   	=> $this->input->post('last_name'),
					'username' 		=> $this->input->post('username'),
					'email'  	=> $this->input->post('email')
			);
	
			//Table Update
			$this->User_model->update($data, $id);
	
			//Create Message
			$this->session->set_flashdata('user_saved', 'User has been saved');
	
			//Redirect to pages
			redirect('index.php/admin/users');
		}
	}
	
	/*
	 * Delete User
	*
	* @param - (int) $id
	*/
	public function delete($id){
		$this->User_model->delete($id);
			
		//Create Message
		$this->session->set_flashdata('user_deleted', 'User has been deleted');
	
		//Redirect To Index
		redirect('index.php/admin/users');
	}
}