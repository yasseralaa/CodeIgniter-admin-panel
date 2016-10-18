<?php 
class wishlists extends MY_Controller{
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
		$data['wishes'] = $this->Wishlist_model->get_wishes();
                $data['products'] = $this->Product_model->get_products();
                $data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
		//Views
        $data['main_content'] = 'admin/wishlists';
        $this->load->view('admin/wishlists', $data);
	}
        
        public function delete($id){
		$this->Wishlist_model->delete_wishes($id);
		 
		//Create Message
		$this->session->set_flashdata('wish_deleted', 'Your wish has been deleted');
	
		//Redirect to articles
		redirect('index.php/admin/wishlists');
	}
}