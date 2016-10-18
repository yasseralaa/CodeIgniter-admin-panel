<?php 
class orders extends MY_Controller{
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
		$data['orders'] = $this->Billing_model->get_orders();
                $data['orders_details'] = $this->Billing_model->get_orders_details();
                $data['customers'] = $this->Billing_model->get_customers();
		$data['products'] = $this->Product_model->get_products();
                $data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
		//Views
        $data['main_content'] = 'admin/orders';
        $this->load->view('admin/orders', $data);
	}
        
        public function delete($id){
		$this->Billing_model->delete_orders($id);
		 
		//Create Message
		$this->session->set_flashdata('order_deleted', 'Your order has been deleted');
	
		//Redirect to articles
		redirect('index.php/admin/orders');
	}
}