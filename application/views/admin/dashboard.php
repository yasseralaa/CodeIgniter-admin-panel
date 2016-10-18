<!DOCTYPE html>

<html>

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $this->global_data['site_title']; ?> | Dashboard</title>

    <!-- Tell the browser to be responsive to screen width -->

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.5 -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Ionicons -->

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->

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
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  </head>

  <body class="hold-transition skin-blue sidebar-mini">

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



      <!-- Content Wrapper. Contains page content -->

      <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

          <h1>

            Dashboard

            <small>Control panel</small>

          </h1>

          <ol class="breadcrumb">

            <li><a href="<?php echo base_url(); ?>index.php/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

            <li class="active">Dashboard</li>

          </ol>

        </section>



        <!-- Main content -->

        <section class="content">

            

          <!-- Small boxes (Stat box) -->

          <div class="row">

            <div class="col-lg-3 col-xs-6">

              <!-- small box -->

              <div class="small-box bg-aqua">

                <div class="inner">

                  <h3><?php echo sizeof($orders);?></h3>

                  <p>Orders</p>

                </div>

                <div class="icon">

                  <i class="fa fa-shopping-cart"></i>

                </div>

                <a href="<?php echo base_url(); ?>index.php/admin/orders" class="small-box-footer">

                  More info <i class="fa fa-arrow-circle-right"></i>

                </a>

              </div>

            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">

              <!-- small box -->

              <div class="small-box bg-green">

                <div class="inner">

                  <h3><?php echo sizeof($products);?></h3>

                  <p>Products</p>

                </div>

                <div class="icon">

                  <i class="ion ion-stats-bars"></i>

                </div>

                <a href="<?php echo base_url(); ?>index.php/admin/products_admin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

              </div>

            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">

              <!-- small box -->

              <div class="small-box bg-yellow">

                <div class="inner">

                  <h3><?php echo sizeof($users);?></h3>

                  <p>Users</p>

                </div>

                <div class="icon">

                  <i class="ion ion-person-add"></i>

                </div>

                <a href="<?php echo base_url(); ?>index.php/admin/users" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

              </div>

            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">

              <!-- small box -->

              <div class="small-box bg-red">

                <div class="inner">

                  <h3><?php echo sizeof($searches);?></h3>

                  <p>Searches</p>

                </div>

                <div class="icon">

                  <i class="ion ion-pie-graph"></i>

                </div>

                <a href="<?php echo base_url(); ?>index.php/admin/searches" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

              </div>

            </div><!-- ./col -->

          </div><!-- /.row -->

          <!-- Main row -->

          <div class="box box-primary">

                <div class="box-header with-border">

                  <h3 class="box-title">Recently Added Products</h3>

                  <div class="box-tools pull-right">

                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                  </div>

                </div><!-- /.box-header -->

                

                            

                <div class="box-body">

                  <ul class="products-list product-list-in-box">

                       <?php $flag = 0; ?>

                  <?php foreach($products as $product) :?>

                 <?php if($flag>3) break; ?>

                    <li class="item">

                    

                      <div >

                          <a href="javascript::;" class="product-title"><?php echo $product->product_name; ?> 

                          <?php if($flag == 0){?>

                            <span class="label label-warning pull-right"><?php echo $product->product_price; ?> $</span></a>

                            <?php } else if($flag == 1){?>

                            <span class="label label-info pull-right"><?php echo $product->product_price; ?> $</span></a>

                        <?php } else if($flag == 2){?>

                      <span class="label label-danger pull-right"><?php echo $product->product_price; ?> $</span></a>

                        <?php } else {?>

                      <span class="label label-success pull-right"><?php echo $product->product_price; ?> $</span></a>

                        <?php } ?>

                    

                        <span class="product-description">

                          <?php echo $product->product_description; ?>

                        </span>

                      </div>

                    </li><!-- /.item -->

      

      <?php $flag  ; ?>

    <?php endforeach; ?>

                  </ul>

                </div><!-- /.box-body -->

                <div class="box-footer text-center">

                  <a href="<?php echo base_url(); ?>index.php/admin/products_admin" class="uppercase">View All Products</a>

                </div><!-- /.box-footer -->

              </div><!-- /.box -->

              

              <div class="box box-info">

                <div class="box-header with-border">

                  <h3 class="box-title">Latest Orders</h3>

                  <div class="box-tools pull-right">

                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                  </div>

                </div><!-- /.box-header -->

                <div class="box-body">

                  <div class="table-responsive">

                    <table class="table no-margin">

                      <thead>

                        

                        <tr>

                          <th>Order ID</th>

                          <th>Item</th>

                          <th>Customer</th>

                          <th>Price</th>

                        </tr>

                         

                      </thead>

                      <tbody>

                            <?php $flag = 0; ?>

                  <?php foreach($orders as $order) :?>

                 <?php if($flag>3) break; ?>

                        <tr>

                          <td><?php echo $order->id; ?></td>

                          <td><?php echo $orders_details[$order->id]->product_name; ?></td>

                          <td><?php echo $order->customer_name;?></td>

                         <td> 

                         <?php if($flag == 0){?>

                            <span class="label label-warning pull-right"><?php echo $orders_details[$order->id]->price; ?> $</span></a>

                            <?php } else if($flag == 1){?>

                            <span class="label label-info pull-right"><?php echo $orders_details[$order->id]->price; ?> $</span></a>

                        <?php } else if($flag == 2){?>

                      <span class="label label-danger pull-right"><?php echo $orders_details[$order->id]->price; ?> $</span></a>

                        <?php } else {?>

                      <span class="label label-success pull-right"><?php echo $orders_details[$order->id]->price; ?> $</span></a>

                        <?php } ?>

                         </td>

                        </tr>

                        

                        <?php $flag  ; ?>

                     <?php endforeach; ?>

                      </tbody>

                    </table>

                  </div><!-- /.table-responsive -->

                </div><!-- /.box-body -->

                <div class="box-footer clearfix">

                  <a href="<?php echo base_url(); ?>index.php/admin/orders" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>

                </div><!-- /.box-footer -->

              </div><!-- /.box -->

          <div class="row">

            <!-- Left col -->

            <section class="col-lg-7 connectedSortable">

               <div class="col-md-6">

                 <!-- USERS LIST -->

                  <div class="box box-danger">

                    <div class="box-header with-border">

                      <h3 class="box-title">Latest Admins</h3>

                      <div class="box-tools pull-right">

                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                      </div>

                    </div><!-- /.box-header -->

                    <div class="box-body no-padding">

                      <ul class="users-list clearfix">

                          <?php $flag = 0; ?>

                  <?php foreach($admins as $admin) :?>

                 <?php if($flag>5) break; ?>

                        <li>

                          <a class="users-list-name" href="#"><?php echo $admin->first_name;?></a>

                          <span class="users-list-date"><?php echo $admin->created;?></span>

                        </li>

                         <?php $flag  ; ?>

                     <?php endforeach; ?>

                      </ul><!-- /.users-list -->

                    </div><!-- /.box-body -->

                    <div class="box-footer text-center">

                      <a href="javascript::" class="uppercase">View All Admins</a>

                    </div><!-- /.box-footer -->

                  </div><!--/.box -->

                </div><!-- /.col -->

                

                 <div class="col-md-6">

                  

                </div><!-- /.col -->

            </section><!-- /.Left col -->

            <!-- right col (We are only adding the ID to make the widgets sortable)-->

            <section class="col-lg-5 connectedSortable">





            </section><!-- right col -->

          </div><!-- /.row (main row) -->



        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->

      <footer class="main-footer">

        <div class="pull-right hidden-xs">

           

        </div>

        <strong>Copyright &copy; 2016 <a href="www.localhost/adminpanel">localhost/adminpanel TECH</a>.</strong> All rights reserved.

      </footer>



      <!-- Control Sidebar -->

      <aside class="control-sidebar control-sidebar-dark">

        <!-- Create the tabs -->

        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>

        </ul>

       

      </aside><!-- /.control-sidebar -->

      <!-- Add the sidebar's background. This div must be placed

           immediately after the control sidebar -->

      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->



    <!-- jQuery 2.1.4 -->

    <script src="<?php echo base_url(); ?>assets/js/plugins/jQuery/jQuery-2.1.4.min.js"></script>

<script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <!-- jQuery UI 1.11.4 -->

    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script>

      $.widget.bridge('uibutton', $.ui.button);

    </script>

    <!-- Bootstrap 3.3.5 -->

    <script src="https://almsaeedstudio.com/themes/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

    <!-- AdminLTE App -->

    <script src="https://almsaeedstudio.com/themes/AdminLTE/dist/js/app.min.js"></script>

    

  </body>

</html>


