<?php 
class products_admin extends MY_Controller{
	public function __construct(){
		parent::__construct();
		
		//Access Control
		if(!$this->session->userdata('logged_in')){
			redirect('index.php/admin/authenticate/login');
		}
               
	}

        public function index(){
		
			//Get Filtered Products
			 $data['products'] = $this->Product_model->get_filtered_products($this->input->post('keywords'),'id','DESC',10);
			//Get Products
			 $data['products'] = $this->Product_model->get_products('id','DESC',10);
		//Get Categories
		$data['categories'] = $this->Product_model->get_categories('id','DESC',5);
		
		//Get Admins
		$data['admins'] = $this->Admins_model->get_admins('id','DESC',5);
		$data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
		//View
		$data['main_content'] = 'admin/Products_admin/index';
		$this->load->view('admin/products_admin/index',$data);
	}
	
	/*
	 * Add Article
	 */
	public function add(){
            $data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
           // $this->imagename = "unknown";
            
		//Validation Rules
		$this->form_validation->set_rules('product_name','Product_name','trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('product_description','Product_description','trim|required|xss_clean');
		$this->form_validation->set_rules('category','Category','required');
		
		$data['categories'] = $this->Product_model->get_categories();
		$data['categories'] = $this->Product_model->get_categories();
                $data['subcategories'] = $this->Subcategory_model->get_subcategories('id', 'DESC');
		$data['admins'] = $this->Admins_model->get_admins();
                 //image upload
                       $myimagename = $this->do_upload();
		$this->session->set_flashdata('product_name', $this->input->post('product_name'));
                $this->session->set_flashdata('product_image', $this->input->post($myimagename));
		$this->session->set_flashdata('product_price', $this->input->post('product_price'));
                $this->session->set_flashdata('product_currency', $this->input->post('product_currency'));
                $this->session->set_flashdata('merchant_email', $this->input->post('merchant_email'));
                $this->session->set_flashdata('product_description', $this->input->post('product_description'));
                $this->session->set_flashdata('category', $this->input->post('category'));
                $this->session->set_flashdata('payment_mode', $this->input->post('payment_mode'));
                $this->session->set_flashdata('admin', $this->input->post('admin'));
                
                if($this->form_validation->run() == FALSE){
			//Views
			$data['main_content'] = 'admin/products_admin/add';
			$this->load->view('admin/products_admin/add', $data);
		} else {
                       if($myimagename[0]=='<')
                       {
                           $temp  = substr($myimagename, 3);
                       //Create Message
			$this->session->set_flashdata('image_error', $temp);
			
                        //Redirect to pages
			redirect('index.php/admin/products_admin/add');
                       }
                       else
                       {
                           if($this->Product_model->subcategory_exists($this->input->post('category')))
                           {
			//Create Articles Data Array
			$data = array(
					'product_name' => $this->input->post('product_name'),
                                        'product_price' => $this->input->post('product_price'),
                                        'product_currency' => $this->input->post('product_currency'),
                                        'merchant_email' => $this->input->post('merchant_email'),
                                        'product_description' => $this->input->post('product_description'),
                                        'category_id'   => $this->Subcategory_model->get_subcategory($this->input->post('category'))->category_id,
                                        'subcategory_id'   => $this->input->post('category'),
                                        'payment_mode' => $this->input->post('payment_mode'),
                                        'user_id'       => $this->input->post('admin'),
                                        'product_image'   	=> $myimagename
                                    );
                           }
                           else
                           {
                               $data = array(
					'product_name' => $this->input->post('product_name'),
                                        'product_price' => $this->input->post('product_price'),
                                        'product_currency' => $this->input->post('product_currency'),
                                        'merchant_email' => $this->input->post('merchant_email'),
                                        'product_description' => $this->input->post('product_description'),
                                        'category_id'   => $this->input->post('category'),
                                        'subcategory_id'   => 0,
                                        'payment_mode' => $this->input->post('payment_mode'),
                                        'user_id'       => $this->input->post('admin'),
                                        'product_image'   	=> $myimagename
                                    );
                           }
                           
			//Products Table Insert
			$this->Product_model->insert_product($data);
                        
			//Create Message
			$this->session->set_flashdata('product_saved', 'Your product has been saved');
			
			//Redirect to pages
			redirect('index.php/admin/products_admin/add');
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
		$config['overwrite'] = TRUE;
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			//$error = array('error' => $this->upload->display_errors());
                        $error = array('error' => $this->upload->display_errors());
        // $this->session->set_flashdata('error',);
			//$this->load->view('admin/products_admin/add', $error);
                        return $error['error'];
		}
		else
		{
			$data = $this->upload->data();

			//$this->load->view('upload_success', $data);
                        return $data['raw_name'].$data['file_ext'];
		}
	}
        
        public function edit($id){
            $data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
		//Validation Rules
		$this->form_validation->set_rules('product_name','Product_name','trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('product_description','Product_description','trim|required|xss_clean');
		$this->form_validation->set_rules('category','Category','required');
                $this->form_validation->set_rules('category','Category','required');
               // $this->form_validation->set_rules('userfile','Userfile','required');
                
		$data['categories'] = $this->Product_model->get_categories();
		$data['subcategories'] = $this->Subcategory_model->get_subcategories('id', 'DESC');
		$data['admins'] = $this->Admins_model->get_admins();
		
		$data['product'] = $this->Product_model->get_products_byid($id);
                
               
		if($this->form_validation->run() == FALSE){
			//Views
			$data['main_content'] = 'admin/products_admin/edit';
			$this->load->view('admin/products_admin/edit', $data);
		} else {
                    
                        if($this->input->post('imagechoice')=="Use current image")
                        {
                            if($this->Product_model->subcategory_exists($this->input->post('category')))
                           {
			//Create Articles Data Array
			$data = array(
					'product_name' => $this->input->post('product_name'),
                                        'product_price' => $this->input->post('product_price'),
                                        'product_currency' => $this->input->post('product_currency'),
                                        'merchant_email' => $this->input->post('merchant_email'),
                                        'product_description' => $this->input->post('product_description'),
                                        'category_id'   => $this->Subcategory_model->get_subcategory($this->input->post('category'))->category_id,
                                        'subcategory_id'   => $this->input->post('category'),
                                        'payment_mode' => $this->input->post('payment_mode'),
                                        'user_id'       => $this->input->post('admin')
                                    );
                           }
                           else
                           {
                               $data = array(
					'product_name' => $this->input->post('product_name'),
                                        'product_price' => $this->input->post('product_price'),
                                        'product_currency' => $this->input->post('product_currency'),
                                        'merchant_email' => $this->input->post('merchant_email'),
                                        'product_description' => $this->input->post('product_description'),
                                        'category_id'   => $this->input->post('category'),
                                        'subcategory_id'   => 0,
                                        'payment_mode' => $this->input->post('payment_mode'),
                                        'user_id'       => $this->input->post('admin')
                                    );
                           }
                        }
                        else
                        {
                             //image upload
                       $myimagename = $this->do_upload();
                       if($myimagename[0]=='<')
                       {
                           $temp  = substr($myimagename, 3);
                       //Create Message
			$this->session->set_flashdata('image_error', $temp);
			
                        //Redirect to pages
			redirect('index.php/admin/products_admin');
                       }
                            else
                            {
                                if($this->Product_model->subcategory_exists($this->input->post('category')))
                           {
			//Create Articles Data Array
			$data = array(
					'product_name' => $this->input->post('product_name'),
                                        'product_price' => $this->input->post('product_price'),
                                        'product_currency' => $this->input->post('product_currency'),
                                        'merchant_email' => $this->input->post('merchant_email'),
                                        'product_description' => $this->input->post('product_description'),
                                        'category_id'   => $this->Subcategory_model->get_subcategory($this->input->post('category'))->category_id,
                                        'subcategory_id'   => $this->input->post('category'),
                                        'payment_mode' => $this->input->post('payment_mode'),
                                        'user_id'       => $this->input->post('admin'),
                                       'product_image'   	=> $myimagename
                                    );
                           }
                           else
                           {
                               $data = array(
					'product_name' => $this->input->post('product_name'),
                                        'product_price' => $this->input->post('product_price'),
                                        'product_currency' => $this->input->post('product_currency'),
                                        'merchant_email' => $this->input->post('merchant_email'),
                                        'product_description' => $this->input->post('product_description'),
                                        'category_id'   => $this->input->post('category'),
                                        'subcategory_id'   => 0,
                                        'payment_mode' => $this->input->post('payment_mode'),
                                        'user_id'       => $this->input->post('admin'),
                                        'product_image'   	=> $myimagename
                                    );
                           }

                            }
                        }
                       //Products Table Updates
			$this->Product_model->update_products($data, $id);
			
			//Create Message
			$this->session->set_flashdata('product_saved', 'Your product has been saved');
			
			//Redirect to pages
			redirect('index.php/admin/products_admin');
		}
                
	}
        
        public function delete($id){
            $data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
		$this->Product_model->delete_products($id);
		 
		//Create Message
		$this->session->set_flashdata('product_deleted', 'Your product has been deleted');
	
		//Redirect to articles
		redirect('index.php/admin/products_admin');
	}
        
        public function deletechecked(){
            $data['userdata'] = $this->session->all_userdata();
                $data['subscriptions'] = $this->Subscription_model->get_all_subscriptions();
                
                $checked_messages = $this->input->post('businessType'); //selected messages
               $this->Product_model->delete_allchecked($checked_messages);

		//Create Message
		$this->session->set_flashdata('product_deleted', 'Your product has been deleted');
                //$this->session->set_flashdata('product_deleted',  var_dump($datachecked));
                //
		//Redirect to articles
		redirect('index.php/admin/products_admin');
	}
        
}