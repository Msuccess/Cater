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
    <title>PERBTOCOL CATERING SERVICE</title>
    <?php include 'links.php';?> 
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-shadow navbar-brand-center">
    <?php include 'header.php';?> 
    </nav>

    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include 'menubar.php';?> 
    <!-- END: Main Menu-->
    <br>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
      <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class = "col-md-9 col-lg-9">
          <div class="card">
                
                <div class="widget-head">
                  <div class="pull-left title">Reservation Summary</div>
                  <div class="col-12 col-md-7 d-flex flex-column flex-md-row justify-content-end">
                    <button class="btn btn-primary btn-print mb-1 mb-md-0" onClick="window.print()"><i class="feather icon-file-text"></i></button>
                    <a href="finish.php" class="btn btn-danger "><i class="fa fa-sign-out"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>
     <!-- invoice page -->
     <section class="card invoice-page">
                    <div id="invoice-template" class="card-body">
                <div class="widget-content">
                  <div class="padd" style="height:650px">
                    <div class="alert alert-success">
                      <b>Reminder: Please print your reservation summary and take note of your reservation code for reservation inquiry.</b>
                    </div>

                    <h3 style="text-align:center">Adharsh Catering Services</h3>
<h4 style="text-align:center">Bangalore City</h4>
<h4 style="text-align:center">Tel. No. : 7204532454</h4>
<h4 style="text-align:center">Email : adharsh@gmail.com</h4>
<h4 style="text-align:center">Facebook : facebook.com/adharshgowda</h4>
<hr>

<table style="width:100%">
<?php
include('admin/includes/dbcon.php');
    $rcode=$_REQUEST['rcode'];
    $query=mysqli_query($con,"select * from reservation left join team on reservation.team_id=team.team_id natural join combo where r_code='$rcode'")or die(mysqli_error($con));
      $row=mysqli_fetch_array($query);
        $rcode=$row['r_code'];
        $first=$row['r_first'];
        $last=$row['r_last'];
        $contact=$row['r_contact'];
        $address=$row['r_address'];
        $date=$row['r_date'];
        $venue=$row['r_venue'];
        $balance=$row['balance'];
        $payable=$row['payable'];
        $ocassion=$row['r_ocassion'];
        $team=$row['team_name'];
        $status=$row['r_status'];
        $motif=$row['r_motif'];
        $time=$row['r_time'];
        $time=$row['r_time'];
        $type=$row['r_type'];
        $cid=$row['combo_id'];

?>                      
                      <tr>
                        <td>RCode: </td>
                        <td><?php echo $rcode;?></td>
                        <td>Event Date: </td>
                        <td><?php echo date("M d, Y",strtotime($date));?></td>
                      </tr>
                      <tr>  
                        <td>Name: </td>
                        <td><?php echo $last." ,".$first;?></td>
                        <td>Time: </td>
                        <td><?php echo date("h:i a",strtotime($time));?></td>
                      </tr>
                      <tr>
                        <td>Contact #: </td>
                        <td><?php echo $contact;?></td>
                        <td>Venue: </td>
                        <td><?php echo $venue;?></td>
                      </tr> 
                      <tr>
                        <td>Address: </td>
                        <td><?php echo $address;?></td>
                        <td>Motif: </td>
                        <td><?php echo $motif;?></td>

                      </tr>   
                      <tr>  
                        <td>Status:</td>
                        <th><?php echo $row['r_status'];?></th>
                        <td>Occasion: </td>
                        <td><?php echo $ocassion;?></td>
                        
                      </tr>  
                      <tr>  
                        <td></td>
                        <td></td>
                        <td>Type: </td>
                        <td><?php echo $type;?></td>
                        
                      </tr>  
                      <tr>  
                        <td></td>
                        <td></td>
                        <td>No. of Pax: </td>
                        <td><?php echo $row['pax'];?></td>
                        
                      </tr>  

                      <tr>  
                        <td></td>
                        <td></td>
                        <td>Payable: </td>
                        <td>P <?php echo number_format($payable,2);?></td>
                      </tr> 
                      <tr>  
                        <td></td>
                        <td></td>
                        <td>Mode of Payment: </td>
                        <td><?php echo $row['modeofpayment'];?></td>
                      </tr> 
                      
</table>
<br>
<div style="width:50%;float:left">
  <h4><?php echo $row['combo_name'];?></h4>
  <span>No. of persons: <?php echo $row['pax'];?> * <?php echo $row['price'];?> = <?php echo $row['payable'];?></span>
  <ul>

<?php
    
    $query1=mysqli_query($con,"select * from combo_details natural join menu where combo_id='$cid'")or die(mysqli_error($con));
      while($row1=mysqli_fetch_array($query1))
      {
  ?>    
    <li><?php echo  $row1['menu_name'];?></li>

<?php }?>    
</div>


                  </div><!--pad-->  
                </div>
                    </div>
     </section>
     
          </div><!--widget-->          
        </div><!--col 9-->
        
        <?php include('right-sidebar.php');?>
      </div>  
    </div>
<?php include 'footer.php';?>   
<?php include 'script.php';?>
<script>
         $(function () {
         //Initialize Select2 Elements
         $(".select2").select2();
         

     })
    </script>
</body>
</html>



