<?php 
class searches extends MY_Controller{
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
		$data['searches'] = $this->Search_model->get_all_searches();
                $data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
		//Views
        $data['main_content'] = 'admin/searches';
        $this->load->view('admin/searches', $data);
	}
        
        public function delete($id){
		$this->Billing_model->delete_searches($id);
		 
		//Create Message
		$this->session->set_flashdata('search_deleted', 'Your search has been deleted');
	
		//Redirect to articles
		redirect('index.php/admin/searches');
	}
}