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
    <title>Dashboard - PERBTOCOL</title>
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
                                    <h4 class="card-title">DASHBOARD</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <nav aria-label="breadcrumb">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                                    <li class="breadcrumb-item"><a href="#">RESERVATION</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">VIEW DETAILS</li>
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
                                <h3 class="card-title">RESERVATIONS GENERAL STATUS</h3>
                            </div>
                            <div class="card-content">
                                <div class="card-body">

                                     <div class="row">
<?php
include('includes/dbcon.php');
    $today=date('Y-m-d');
    $query=mysqli_query($con,"select COUNT(*) as count from reservation where r_status='Approved' and r_date>='$today'")or die(mysqli_error($con));
      $row=mysqli_fetch_array($query);
        $count=$row['count'];
?>             
                      <div class="col-md-4">
                        <div class="alert alert-info">
                          <i class="fa fa-thumbs-o-up pull-left" style="font-size:65px"></i><h2> <?php echo $count;?> </h2>
                          <p>Approved</p>
                        </div>
                      </div>
<?php
    $query=mysqli_query($con,"select COUNT(*) as count from reservation where r_status='Pending' and r_date>='$today'")or die(mysqli_error($con));
      $row=mysqli_fetch_array($query);
        $count=$row['count'];
?> 
                      <div class="col-md-4">
                        <div class="alert alert-warning">
                          <i class="fa fa-spinner pull-left" style="font-size:65px"></i><h2 class=""><?php echo $count;?></h2>
                          <p>Pending</p>                        
                        </div>
                      </div>
<?php
    $query=mysqli_query($con,"select COUNT(*) as count from reservation where r_status='Finished'")or die(mysqli_error($con));
      $row=mysqli_fetch_array($query);
        $count=$row['count'];
?> 
                      <div class="col-md-4">
                        <div class="alert alert-success">
                          <i class="fa fa-check-circle-o pull-left" style="font-size:65px"></i><h2><?php echo $count;?></h2>
                          <p>Finished</p>
                        </div>
                      </div>

                    
          </div>  <!--row-->


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
<!-- Default Breadcrumb Ends -->

<div class="row">
            <div class="col-md-5">
              <!-- Widget -->
              <div class="widget">
                <!-- Widget head -->
                <div class="widget-head">
                  <div class="pull-left">Monthly Sales Report</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>              

                <!-- Widget content -->
                <div class="widget-content">
                  <div class="padd">

                      <div id="graph"></div>
                  </div><!--pad-->
                </div><!--widget content-->  
              </div><!--widget-->
            </div><!--col 6-->
            
            <div class="col-md-5">
              <!-- Widget -->
              <div class="widget">
                <!-- Widget head -->
                <div class="widget-head">
                  <div class="pull-left">Monthly Reservation Report</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>              

                <!-- Widget content -->
                <div class="widget-content">
                  <div class="padd">

                      <div id="graph1"></div>
                  </div><!--pad-->
                </div><!--widget content-->  
              </div><!--widget-->
            </div><!--col 6-->

            <div class="col-md-2">
              <!-- Widget -->
              <div class="widget">
                <!-- Widget head -->
                <div class="widget-head">
                  <div class="pull-left">Reservation</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>              

                <!-- Widget content -->
                <div class="widget-content">
                  <div class="padd">
                    <ul class="recent">
<?php
    $query=mysqli_query($con,"select * from reservation where r_status='Approved' and r_date>='$today' order by r_date")or die(mysqli_error($con));
      while($row=mysqli_fetch_array($query)){
        $name=$row['r_last'].", ".$row['r_first'];
        $date=$row['r_date'];
?> 

                      <li>

                        <div class="recent-content">
                          <div class="recent-meta"><?php echo date("M d, Y",strtotime($date));?></div>
                          <div><?php echo $name;?>
                          </div>

                          <div class="clearfix"></div>
                        </div>
                      </li>

<?php }?>                                    


                    </ul>
                      
                  </div><!--pad-->
                </div><!--widget content-->  
              </div><!--widget-->
            </div><!--col 6-->

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

<?php
    if (isset($_POST['del']))
    {
    $id=$_POST['id'];

  // sending query
  mysqli_query($con,"delete from reservation WHERE rid='$id'")
  or die(mysqli_error());
  echo "<script>document.location='pending.php'</script>";
    }
    ?>
<!-- JS -->
<?php include('includes/js.php');?>  
<script type="text/javascript">
    $(document).ready(function() {
      var options = {
              chart: {
                  renderTo: 'graph',
                  type: 'column',
                  marginRight: 20,
                  marginBottom: 25
              },
              title: {
                  text: '',
                  x: -20 //center
              },
              subtitle: {
                  text: '',
                  x: -10
              },
              xAxis: {
                  categories: []
              },
              yAxis: {
                  
                  title: {
                      text: 'Total Monthly Sales'
                  },
                  plotLines: [{
                      value: 0,
                      width: 1,
                      color: '#808080'
                  }]
              },
              tooltip: {
                  formatter: function() {
                          return '<b>'+ this.series.name +'</b><br/>'+  Highcharts.numberFormat(this.y, 0)
                          this.x +': '+ this.y
                          
                  ;
                  }
              },
              legend: {
                  layout: 'vertical',
                  align: 'right',
                  verticalAlign: 'top',
                  x: 0,
                  y: 100,
                  borderWidth: 0
              },
              series: []
          }
          
          $.getJSON("data1.php", function(json) {
      options.xAxis.categories = json[0]['name'];
            options.series[0] = json[1];
            //options.series[1] = json[2];
            
            
            
            chart = new Highcharts.Chart(options);
          });
      });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
      var options = {
              chart: {
                  renderTo: 'graph1',
                  type: 'column',
                  marginRight: 20,
                  marginBottom: 25
              },
              title: {
                  text: '',
                  x: -20 //center
              },
              subtitle: {
                  text: '',
                  x: -10
              },
              xAxis: {
                  categories: []
              },
              yAxis: {
                  
                  title: {
                      text: 'Total Monthly Reservations'
                  },
                  plotLines: [{
                      value: 0,
                      width: 1,
                      color: '#808080'
                  }]
              },
              tooltip: {
                  formatter: function() {
                          return '<b>'+ this.series.name +'</b><br/>'+  Highcharts.numberFormat(this.y, 0)
                          this.x +': '+ this.y
                          
                  ;
                  }
              },
              legend: {
                  layout: 'vertical',
                  align: 'right',
                  verticalAlign: 'top',
                  x: 0,
                  y: 100,
                  borderWidth: 0
              },
              series: []
          }
          
          $.getJSON("data_reserve1.php", function(json) {
      options.xAxis.categories = json[0]['name'];
            options.series[0] = json[1];
            //options.series[1] = json[2];
            
            
            
            chart = new Highcharts.Chart(options);
          });
      });
    </script>
</body>
</html>