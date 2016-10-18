<?php 
class Subcategories_admin extends MY_Controller{
	public function __construct(){
		parent::__construct();
		
		//Access Control
		if(!$this->session->userdata('logged_in')){
			redirect('index.php/admin/authenticate/login');
		}
	}
	
	/*
	 * Categories Main Index
	 */
	public function index(){
		//Get Categories
		$data['subcategories'] = $this->Subcategory_model->get_subcategories('id', 'DESC');
		$data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
		//Views
        $data['main_content'] = 'admin/subcategories_admin/index';
        $this->load->view('admin/subcategories_admin/index', $data);
	}
        
        public function add(){
            $data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
		//Validation Rules
		$this->form_validation->set_rules('name','Name','trim|required|min_length[4]|xss_clean');
		
                if($this->form_validation->run() == FALSE){
			//Views
			$data['main_content'] = 'admin/categories_admin/add';
                        $data['categories'] = $this->Product_model->get_categories();
			$this->load->view('admin/subcategories_admin/add', $data);
		} else {
                   
			//Create Data Array
			$data = array(
                                        'category_id'   => $this->input->post('category'),
					'name'         => $this->input->post('name')
			);
				
			//Categories Table Insert
			$this->Subcategory_model->insert_category($data);
				
			//Create Message
			$this->session->set_flashdata('category_saved', 'Your sub-category has been saved');
				
			//Redirect to pages
			redirect('index.php/admin/subcategories_admin');
                       
		}
	}
        
        public function edit($id){
            $data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
		//Validation Rules
		$this->form_validation->set_rules('name','Name','trim|required|min_length[4]|xss_clean');
             //   $this->form_validation->set_rules('category_description','Category_description','trim|required|xss_clean');
		if($this->form_validation->run() == FALSE){
			$data['subcategory'] = $this->Subcategory_model->get_subcategory($id);
			$data['categories'] = $this->Product_model->get_categories();
			//Views
			$data['main_content'] = 'admin/subcategories_admin/edit';
			$this->load->view('admin/subcategories_admin/edit', $data);
		} else {
                   
			//Create Data Array
			$data = array(
					'category_id'   => $this->input->post('category'),
					'name'         => $this->input->post('name')
			);
	
			//Articles Table Insert
			$this->Subcategory_model->update_subcategory($data, $id);
	
			//Create Message
			$this->session->set_flashdata('category_saved', 'Your sub-category has been saved');
	
			//Redirect to pages
			redirect('index.php/admin/subcategories_admin');
		}
	}
        public function delete($id){
		$this->Subcategory_model->delete_subcategory($id);
               $this->Product_model->delete_productssubCategoryID($id);
		//Create Message
		$this->session->set_flashdata('category_deleted', 'Your sub-category has been deleted');
	
		//Redirect to articles
		redirect('index.php/admin/subcategories_admin');
	}
        
        
        public function deletechecked(){
                $checked_messages = $this->input->post('businessType'); //selected messages
               $this->Subcategory_model->delete_allchecked($checked_messages);

		//Create Message
		$this->session->set_flashdata('category_deleted', 'Your sub-categories has been deleted');
	
		//Redirect to articles
		redirect('index.php/admin/subcategories_admin');
	}
        
	
}