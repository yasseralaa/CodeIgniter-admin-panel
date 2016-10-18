<?php 
class customers extends MY_Controller{
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
                $data['customers'] = $this->Billing_model->get_customers();
                $data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
		//Views
        $data['main_content'] = 'admin/customers';
        $this->load->view('admin/customers', $data);
	}
        
        public function delete($id){
		$this->Billing_model->delete_customers($id);
		 
		//Create Message
		$this->session->set_flashdata('customer_deleted', 'customer has been deleted');
	
		//Redirect to articles
		redirect('index.php/admin/customers');
	}
}