<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>localhost/adminpanel|Edit PRODUCT</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>index.php/admin/dashboard" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b style="color:green">Wed</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg" style="color:#e7e7e7"><b style="color:green">Wed</b>ian</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs"><?php echo $userdata["username"]; ?></span>
                </a>
              </li>
              <li class="dropdown user user-menu">
                <a href="http://www.localhost/adminpanel" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">View Site</span>
                </a>
              </li>
              <li class="dropdown user user-menu">
                <a href="<?php echo base_url(); ?>index.php/admin/authenticate/logout" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">Logout</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- search form -->
      
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/admin/dashboard">
                <i class="fa fa-th"></i> <span>Dashboard</span> <small class="label pull-right bg-green"></small>
              </a>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Site Data</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>index.php/admin/products_admin"><i class="fa fa-circle-o"></i> Products</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin/categories_admin"><i class="fa fa-circle-o"></i> Categories</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin/subcategories_admin"><i class="fa fa-circle-o"></i> Sub-Categories</a></li>
              </ul>
            </li>
           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Admins & Users</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>index.php/admin/admins"><i class="fa fa-circle-o"></i> Admins</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin/users"><i class="fa fa-circle-o"></i> Users</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Orders</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>index.php/admin/orders"><i class="fa fa-circle-o"></i> Orders Sheet</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin/customers"><i class="fa fa-circle-o"></i> Customers details</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Trends</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>index.php/admin/searches"><i class="fa fa-circle-o"></i> Searched Stuff</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin/wishlists"><i class="fa fa-circle-o"></i> Wishlists</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/admin/subscriptions">
                <i class="fa fa-envelope"></i> <span>Subscriptions</span>
                <small class="label pull-right bg-yellow"><?php echo sizeof($subscriptions);?></small>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <!-- Content Header (Page header) -->
        <section class="content-header">

          <h1>
            Products
            <small>Edit Product</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li  class="active" ><a href="<?php echo base_url(); ?>index.php/admin/products_admin">Products</a></li>
            <li  class="active" >Edit Product</li>
          </ol>
        </section>
<div class="box box-primary">
        <!-- Main content -->
        <section class="content">

           <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/products_admin/edit/<?php echo $product->id; ?>">
			  <div class="row">
			  <div class="col-lg-6">
			  </div>
				<div class="col-lg-6">
					<div class="btn-group pull-right">
						<input type="submit" name="submit" class="btn btn-default" value="Save" />
						<a href="<?php echo base_url(); ?>index.php/admin/products_admin" class="btn btn-default">Close</a>
				</div>
			  </div>
			</div><!-- /.row -->
			
				<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<label>Product Name</label>
							<input class="form-control" type="text" name="product_name" id="title" value="<?php echo $product->product_name; ?>" placeholder="Enter Product Name" />
                                                </div>
                                            
                                                <div  class="col-md-8 nopadding">
                                                    <label  class="block fg-label">Product Price</label>
                                                    <input  type="number" step="0.01" min="0" class="form-control" placeholder="Enter Product Price" name="product_price" value="<?php echo $product->product_price; ?>">
                                                    <p id ="product_price" class="fg-help red"></p>
                                                </div>
                                                
                                            <div class="col-md-4 ">
                                                    <label class="block fg-label">Currency</label>
                                                    <select id="product_currency" class="form-control" name="product_currency">
                                                        <option value="USD" title="$" >USD</option>
                                                        <option value="AUD" title="$" >AUD</option>
                                                        <option value="BRL" title="R$" >BRL</option>
                                                        <option value="GBP" title="£" >GBP</option>
                                                        <option value="CAD" title="$" >CAD</option>
                                                        <option value="CZK" title="">CZK</option>
                                                        <option value="DKK" title="">DKK</option>
                                                        <option value="EUR" title="€">EUR</option>
                                                        <option value="HKD" title="$">HKD</option>
                                                        <option value="HUF" title="">HUF</option>
                                                        <option value="ILS" title="₪">ILS</option>
                                                        <option value="JPY" title="¥">JPY</option>
                                                        <option value="MXN" title="$">MXN</option>
                                                        <option value="TWD" title="NT$">TWD</option>
                                                        <option value="NZD" title="$">NZD</option>
                                                        <option value="NOK" title="">NOK</option>
                                                        <option value="PHP" title="P">PHP</option>
                                                        <option value="PLN" title="">PLN</option>
                                                        <option value="RUB" title="">RUB</option>
                                                        <option value="SGD" title="$">SGD</option>
                                                        <option value="SEK" title="">SEK</option>
                                                        <option value="CHF" title="">CHF</option>
                                                        <option value="THB" title="฿">THB</option>
                                                    </select>
                                                    <p class="fg-help"></p>
                                                </div>
                                            
                                            <div id="selectImage">
		<label>Product Image</label><br>
                <label class="block fg-label">Use current image</label>
<input type="radio" name="imagechoice" value="Use current image" checked="checked"  />
<label class="block fg-label">choose another one</label>
<input type="radio" name="imagechoice" value="choose another one"  />
		<?php echo form_open_multipart('index.php/admin/products_admin/edit');?> 
		<?php echo "<input type='file' accept='image/*'  name='userfile' value='$product->product_image' size='20' id='image'/>"; ?>
                                            </div>
                                            
                                            
						<div class="form-group">
							<label>Category</label>
                                                        
							<select name="category" class="form-control">
                                                             <?php if($product->subcategory_id==0){?>
                                                            <option value="<?php echo $product->category_id;?>">*Category: <?php echo $this->Category_model->get_category($product->category_id)->name;?></option>
                                                            <?php } else {?>
                                                            <option value="<?php echo $product->subcategory_id;?>"><?php echo $this->Subcategory_model->get_subcategory($product->subcategory_id)->name;?></option>
                                                            <?php }?>
								<?php foreach($categories as $category) : ?>
								 	<option value="<?php echo $category->id; ?>" required = "required">*<?php echo $category->name."   :-"; ?></option>
                                                                        <?php foreach($subcategories as $subcategory) : ?>
                                                                        <?php if($subcategory->category_id==$category->id){?>
                                                                        <option value="<?php echo $subcategory->id; ?>" required = "required">-Sub-Category: <?php echo $subcategory->name; ?></option>
                                                                        <?php } endforeach; ?>    
								 <?php endforeach; ?>   
                                                             
							</select>
						</div>
                                            
                                            
						<div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Product Description</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body pad">
                  <form>
                    <textarea id="editor1" name="product_description" required = "required" rows="10" cols="80">
                                     <?php echo $product->product_description; ?>
                    </textarea>
                  </form>
                </div>
              </div>				
					
                                            <div class="fg-row">
                                                <label class="block fg-label">Merchant Email Id</label>
                                                <input id="merchant_email" type="text" class="form-control" placeholder="Enter Merchant Mail" name="merchant_email" value="<?php echo $product->merchant_email; ?>">
                                                <p  id="merchant_email" class="fg-help red"></p>
                                            </div>
                                            
                                            
						<div class="fg-row first">
                                                <label class="block fg-label">Payments Mode</label>
                                                <select name="payment_mode" id="payment_mode" class="form-control">
                                                    <option selected="selected" value="<?php echo $product->payment_mode; ?>"> -- Select Payment Mode -- </option>
                                                    <option value="https://www.sandbox.paypal.com/us/cgi-bin/webscr">sandbox.paypal</option>
                                                    <option value="https://www.paypal.com/cgi-bin/webscr">paypal</option>
                                                </select>
                                                
                                                <p id="payment_mode" class="fg-help"></p>
                                            </div>
                                            
						
						
						<div class="form-group">
							<label>Author</label>
							<select  name="admin" class="form-control">
								 <option selected="selected" value="<?php echo $product->user_id; ?>" value="0">Select Author</option>
								 <?php foreach($admins as $admin) : ?>
								 	<option value="<?php echo $admin->id; ?>"><?php echo $admin->first_name; ?> <?php echo $admin->last_name; ?></option>
								 <?php endforeach; ?>       
							</select>
						</div>
						</div>
				</div><!-- /.row -->
			</form>
        </section><!-- /.content -->
</div>
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
           
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="www.localhost/adminpanel">localhost/adminpanel tech</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

   <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="https://almsaeedstudio.com/themes/AdminLTE/dist/js/app.min.js"></script>
   <script src="https://almsaeedstudio.com/themes/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/fastclick/fastclick.js"></script>
<script>
      $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="https://datatables.net/examples/resources/demo.js"></script>

<!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url(); ?>assets/css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>
  </body>
</html>
