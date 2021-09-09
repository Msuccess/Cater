<?php session_start();
if(empty($_SESSION['id'])):
header('Location:index.php');
endif;
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="Samuel">
    <title>MEMBERS - PERBTOCOL</title>
 <?php include('includes/links.php');?>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

 
    <!-- BEGIN: Header-->

 <?php include('includes/topbar.php');?>

    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
 <?php include('includes/sidebar.php');?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Default Breadcrumb Starts -->
                <section id="default-breadcrumb">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">MEMBERS</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <nav aria-label="breadcrumb">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">MEMBERS</li>
                                                </ol>
                                            </nav>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Default Breadcrumb Ends -->

<!-- Default Breadcrumb BEGIN -->
                 <section id="auto-layout-columns" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">PERBTOCOL MEMBERS</h3>
                            </div>
                            <div class="card-content">
                                <div class="card-body">

                           <div class="pull-left">            
                            <a href="#addModal" class="btn btn-info" data-toggle="modal">Add New Member</a>
                  </div>
                 <div class="clearfix"></div>
                </div>
                    
       <!-- Table Page -->
              <div class="page-tables">
                <!-- Table -->
                <div class="table-responsive">
                  <table cellpadding="0" cellspacing="0" border="0" id="data-table" width="100%" class="table table-striped mb-0">
                    <thead>
                      <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include('includes/dbcon.php');

    $query=mysqli_query($con,"select * from member order by member_last")or die(mysqli_error($con));
      while ($row=mysqli_fetch_array($query)){
        $id=$row['member_id'];
        $last=$row['member_last'];
        $first=$row['member_first'];
        $contact=$row['member_contact'];
        $address=$row['member_address'];
        $status=$row['member_status'];
        if ($status=="active") $flag="success";else $flag="danger";
?>                      
                      <tr>
                        <td><?php echo $last;?></td>
                        <td><?php echo $first;?></td>
                        <td><?php echo $contact;?></td>
                        <td><?php echo $address;?></td>
                        <td><span class="label label-<?php echo $flag;?>"><?php echo $status;?></span></td>
                        <td>
                              <a href="#myModal" class="btn btn-info" data-target="#update<?php echo $id;?>" data-toggle="modal">
                                <i class="fa fa-pencil"></i>
                              </a>
                        </td>
                      </tr>
<!-- Modal -->
<div id="update<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">Update Member Details</h4>
            </div>
            <div class="modal-body" style="height:250px">
              <!--start form-->
              <form class="form-horizontal" method="post" action="member_update.php">
                  <!-- Title -->
                  <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
                  <div class="form-group">
                      <label class="control-label col-lg-4" for="title">Last Name</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="last" id="title" placeholder="Write Last Name" value="<?php echo $last;?>">
                      </div>
                  </div> 
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-4" for="username">First Name</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="first" id="username" placeholder="Write First Name" value="<?php echo $first;?>">
                      </div>
                  </div> 
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-4" for="password">Contact #</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="contact" id="password" placeholder="Write contact number" value="<?php echo $contact;?>">
                      </div>
                  </div> 
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-4" for="password">Complete Address</label>
                      <div class="col-lg-8"> 
                        <textarea class="form-control" name="address" id="password" placeholder="Write complete address"><?php echo $address;?></textarea>
                      </div>
                  </div> 

                  <div class="form-group">
                      <label class="control-label col-lg-4" for="password">Status</label>
                      <div class="col-lg-8"> 
                        <select class="form-control" id="exampleSelect1" name="status">
                                <option><?php echo $status;?></option>
                                <option>active</option>
                                <option>inactive</option>
                        </select>
                      </div>
                  </div>                                
                  <!-- Buttons -->
                  <div class="form-group">
                      <!-- Buttons -->
                      <div class="col-lg-offset-4 col-lg-6">
                        <button type="submit" class="btn btn-sm btn-primary" name="update">Update</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                       </div>
                  </div>
              </form>
              <!--end form-->
            </div>
           
        </div><!--modal content-->
    </div><!--modal dialog-->
</div>
<!--end modal-->                      
<?php }?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                  <div class="clearfix"></div>
                </div>
                </div>
              </div>

          
                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>  
              
            </div>
          </div>
        </div>
      </div>

    <!-- Matter ends -->


    </div>

   <!-- Mainbar ends -->
   <div class="clearfix"></div>

</div>
<!-- Content ends -->

<!-- Footer starts -->
<?php include('includes/footer.php');?>  

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
<!-- Modal -->
<div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">Add New Member</h4>
            </div>
            <div class="modal-body">
              <!--start form-->
              <form class="form-horizontal" method="post" action="member_save.php">
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-2" for="title">Last Name</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="last" id="title" placeholder="Write Last Name" required>
                      </div>
                  </div> 
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-2" for="username">First Name</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="first" id="username" placeholder="Write First Name" required>
                      </div>
                  </div> 
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-2" for="password">Contact #</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="contact" id="password" placeholder="Write contact number">
                      </div>
                  </div> 
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-2" for="password">Complete Address</label>
                      <div class="col-lg-8"> 
                        <textarea class="form-control" name="address" id="password" placeholder="Write complete address"></textarea>
                      </div>
                  </div>     


                  <!-- Buttons -->
                  <div class="form-group">
                      <!-- Buttons -->
                      <div class="col-lg-offset-2 col-lg-6">
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                       </div>
                  </div>
              </form>
              <!--end form-->
            </div>
            
        </div><!--modal content-->
    </div><!--modal dialog-->
</div>
<!--end modal-->  
<!-- JS -->

<?php include('includes/js.php');?> 
</body>
<!-- END: Body-->

</html>