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
    <title>MENU - PERBTOCOL</title>
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
                                    <h4 class="card-title">APPROVED RESERVATIONS</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <nav aria-label="breadcrumb">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">MENU</li>
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
                                <h3 class="card-title">MENU SERVICE</h3>
                            </div>
                            <div class="card-content">
                                <div class="card-body">

                           <div class="pull-left">            
                            <a href="#addModal" class="btn btn-info" data-toggle="modal">Add New Menu</a>
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
                        <th>Team Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include('includes/dbcon.php');

    $query=mysqli_query($con,"select * from team order by team_name")or die(mysqli_error($con));
      while ($row=mysqli_fetch_array($query)){
        $id=$row['team_id'];
        $team=$row['team_name'];
        
?>                      
                      <tr>
                        <td><?php echo $team;?></td>
                        <td>
                              <a href="#myModal" class="btn btn-info" data-target="#update<?php echo $id;?>" data-toggle="modal">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="#delete" class="btn btn-danger" data-target="#delete<?php echo $id;?>" data-toggle="modal">
                                <i class="fa fa-times"></i>
                              </a>
                        </td>
                      </tr>
<!-- Modal -->
<div id="update<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">Update Team Details</h4>
            </div>
            <div class="modal-body" style="height:100px">
              <!--start form-->
              <form class="form-horizontal" method="post" action="team_update.php">
                  <!-- Title -->
                  <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
                  <div class="form-group">
                      <label class="control-label col-lg-4" for="title">Team Name</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="team" id="title" placeholder="Write Last Name" value="<?php echo $team;?>">
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
<!-- Modal -->
<div id="delete<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">Delete Team</h4>
            </div>
            <div class="modal-body" style="height:140px">
              <!--start form-->
              <form class="form-horizontal" method="post">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
                  <div class="alert alert-danger">
                      Are you sure you want to delete <?php echo $team;?>?
                    </div>                     
                  <!-- Buttons -->
                  <div class="form-group">
                      <!-- Buttons -->
                      
                        <button type="submit" class="btn btn-sm btn-primary" name="del">Delete</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                      
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
                        <th>Team</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                  <div class="clearfix"></div>
                </div>
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
<!-- Default Breadcrumb Ends -->

               
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include('includes/footer.php');?>
    <!-- END: Footer-->
    <!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 

<!-- Modal -->
<div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">Add New Team</h4>
            </div>
            <div class="modal-body">
              <!--start form-->
              <form class="form-horizontal" method="post" action="team_save.php">
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-2" for="title">Team Name</label>
                      <div class="col-lg-8"> 
                        <input type="text" class="form-control" name="team" id="title" placeholder="Write Team Name" required>
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
<?php
    if (isset($_POST['del']))
    {
    $id=$_POST['id'];

  // sending query
  mysqli_query($con,"delete from team WHERE team_id='$id'")
  or die(mysqli_error());
  echo "<script>document.location='teams.php'</script>";
    }
    ?>
<!-- JS -->
<?php include('includes/js.php');?> 
</body>
<!-- END: Body-->

</html>