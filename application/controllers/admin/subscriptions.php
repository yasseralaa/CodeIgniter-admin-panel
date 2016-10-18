<?php 
class subscriptions extends MY_Controller{
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
		$data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
                $data['userdata'] = $this->session->all_userdata();
		//Views
        $data['main_content'] = 'admin/subscriptions';
        $this->load->view('admin/subscriptions', $data);
	}
        
        public function delete($id){
		$this->Subscription_model->delete_subscriptions($id);
		 
		//Create Message
		$this->session->set_flashdata('Subscription_deleted', 'Your Subscription has been deleted');
	
		//Redirect to articles
		redirect('index.php/admin/subscriptions');
	}
}