<?php 
class admins extends MY_Controller{
	public function __construct(){
		parent::__construct();
		
		//Access Control
		if(!$this->session->userdata('logged_in')){
			redirect('index.php/admin/authenticate/login');
		}
	}
	
	public function index(){
		//Get Users
		$data['admins'] = $this->Admins_model->get_admins();
		$data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
		//Views
        $data['main_content'] = 'admin/admins/index';
        $this->load->view('admin/admins/index', $data);
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
			$data['main_content'] = 'admin/admins/add';
			$this->load->view('admin/admins/add', $data);
		} else {
                    //image upload
                       $myimagename = $this->do_upload();
                       if($myimagename[0]=='<')
                       {
                           $temp  = substr($myimagename, 3);
                       //Create Message
			$this->session->set_flashdata('image_error', $temp);
			
                        //Redirect to pages
			redirect('index.php/admin/admins/add');
                       }
                       else
                       {
			//Create Data Array
			$data = array(
					'first_name'  	=> $this->input->post('first_name'),
					'last_name'   	=> $this->input->post('last_name'),
					'username' 		=> $this->input->post('username'),
					'password'    	=> $this->input->post('password'),
					'email'  	=> $this->input->post('email'),
                                        'images'   	=> $myimagename
			);
				
			//Table Insert
			$this->Admins_model->insert($data);
				
			//Create Message
			$this->session->set_flashdata('admin_saved', 'Admin has been saved');
				
			//Redirect to pages
			redirect('index.php/admin/admins');
                       }
                        
                       }
	}
	function do_upload()
	{
		$config['upload_path'] = '../assets/images';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '2000';
		$config['max_height']  = '2000';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
                        $error = array('error' => $this->upload->display_errors());
                        return $error['error'];
		}
		else
		{
			$data = $this->upload->data();
                        return $data['raw_name'].$data['file_ext'];
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
			
		$data['admin'] = $this->Admins_model->get_admin($id);
	
	
		if($this->form_validation->run() == FALSE){
			//Views
			$data['main_content'] = 'admin/admins/edit';
			$this->load->view('admin/admins/edit', $data);
		} else {
                    //image upload
                       $myimagename = $this->do_upload();
                       if($myimagename[0]=='<')
                       {
                           $temp  = substr($myimagename, 3);
                       //Create Message
			$this->session->set_flashdata('image_error', $temp);
			
                        //Redirect to pages
			redirect('index.php/admin/admins');
                       }
                       else
                       {
			//Create Data Array
			$data = array(
					'first_name'  	=> $this->input->post('first_name'),
					'last_name'   	=> $this->input->post('last_name'),
					'username' 		=> $this->input->post('username'),
					'password'    	=> md5($this->input->post('password')),
					'email'  	=> $this->input->post('email'),
                                        'images'   	=> $myimagename
			);
	
			//Table Update
			$this->Admins_model->update($data, $id);
	
			//Create Message
			$this->session->set_flashdata('admin_saved', 'Admin has been saved');
	
			//Redirect to pages
			redirect('index.php/admin/admins');
                       }
		}
	}
	
	/*
	 * Delete User
	*
	* @param - (int) $id
	*/
	public function delete($id){
		$this->Admins_model->delete($id);
			
		//Create Message
		$this->session->set_flashdata('admin_deleted', 'Admin has been deleted');
	
		//Redirect To Index
		redirect('index.php/admin/admins');
	}
}