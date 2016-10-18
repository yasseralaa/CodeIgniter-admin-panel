<?php 
class dashboard extends MY_Controller{
	public function __construct(){
		parent::__construct();
		
		//Access Control
		if(!$this->session->userdata('logged_in')){
			redirect('index.php/admin/authenticate/login');
		}
	}

	public function index(){
		//Get Data
		$data['orders'] = $this->Billing_model->get_orders();
                $data['orders_details'] = $this->Billing_model->get_orders_details();
                $data['customers'] = $this->Billing_model->get_customers();
		$data['products'] = $this->Product_model->get_products();
                $data['users'] = $this->User_model->get_users();
                $data['searches'] = $this->Search_model->get_all_searches();
                $data['admins'] = $this->Admins_model->get_admins();
                $data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
		//View
		$data['main_content'] = 'admin/dashboard/index';
		$this->load->view('admin/dashboard',$data);
	}
}