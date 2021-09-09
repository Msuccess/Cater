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

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Tables</h4>
                            </div>
                            <div class="card-content">
                                                <!-- autoplay swiper start -->
                <section id="component-swiper-autoplay">
                    <div class="card ">
                           <div class="card-content">
                                <div class="card-body">
                                    <div id="carousel-example-caption" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-caption" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-caption" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-caption" data-slide-to="2"></li>
                                            <li data-target="#carousel-example-caption" data-slide-to="3"></li>

                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="img-fluid" src="admin/app-assets/images/slider/04.jpg" alt="First slide">
                                                <div class="carousel-caption">
                                                    <h3>First Slide Label</h3>
                                                    <p>Donut jujubes I love topping I love sweet. Jujubes I love brownie gummi bears I love donut sweet
                                                        chocolate. Tart chocolate marshmallow.Tart carrot cake muffin.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="img-fluid" src="admin/app-assets/images/slider/06.jpg" alt="Second slide">
                                                <div class="carousel-caption">
                                                    <h3>Second Slide Label</h3>
                                                    <p>Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes
                                                        chocolate cake gummies. Cupcake cake I love cake danish carrot cake.</p>
                                                </div>
                                            </div>
                               
                                            <div class="carousel-item">
                                                <img class="img-fluid" src="admin/app-assets/images/slider/05.jpg" alt="Third slide">
                                                <div class="carousel-caption">
                                                    <h3>Third Slide Label</h3>
                                                    <p>Pudding sweet pie gummies. Chocolate bar sweet tiramisu cheesecake chocolate cotton candy pastry
                                                        muffin. Marshmallow cake powder icing.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="img-fluid" src="admin/app-assets/images/slider/blue.jpg" alt="Fourth slide">
                                                <div class="carousel-caption">
                                                    <h3>Fourth Slide Label</h3>
                                                    <p>Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes
                                                        chocolate cake gummies. Cupcake cake I love cake danish carrot cake.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-example-caption" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-example-caption" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                     
                <section id="bootstrap-toasts">

                    <!-- Translucent toast and basic toasts starts  -->
                    <div class="row match-height">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">CHECK ORDER RESERVATION STATUS       </h3>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Find the status of any reservations made with PERBTOCOL Catering Services. Whether Order has been approved,
                                        cancelled or updated. Kindly Enter the reservation ticket number in the search box below to get information
                                        about your reservation.
                                    </p>
                           
                                    <div class = "padd">
                                        <form class="form-horizontal" role="form" method="post" action="search.php">
                                                        <div class="form-group">
                                                          <div class="col-lg-10 col-lg-offset-1">
                                                            <input type ="text" name="rcode" class="form-control" placeholder="Enter Reservation Code">
                                                          </div>
                                                        </div>
                                        <div class="form-group">
                                                          <div class="col-lg-offset-1 col-lg-10">
                                                            <button type="submit" class="btn btn-outline-success">Search</button>                                  
                                                          </div>
                                                        </div>
                                                      </form>
                                    </div>
                                    <div class="toast-bs-container">
                                        <div class="toast-position">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h2 class="title">COMPANY STATEMENT</h2>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="mt-1">The food that makes you feel good
                                        </p>
                                        <p class = "body-text">The Catering Services offers great satisfaction and awesome experience not only in food but in all of their services that guarantee the customers needs. 
                                            Through the great effort of their kitchen personnel and their catering crews they are successfully giving the services and a high quality value of foods that suites to all occasions and theme.
                                            </p>
                                            <br/>
                                            <p class = "body-text">
                                            Wanting to give their clients service and a catering experience like no other, Chimney's Catering has always strived to provide something new to their patrons. This is evident in the constantly expanding menus and packages that they offer.
                        “We attend seminars and trainings in order to see the newest trends that we can use here in the country,”Chimney Catering believes that we have to continuously learn new approaches in providing for the needs
                                            </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Translucent toast and basic toasts starts  -->

                    <!-- toast stacking and placement starts -->
                    <div class="row match-height">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">CONTACT PERBTOCOL         </h3>
                                    <p class="mt-2">Toasts are slightly translucent, too, so they blend over whatever they might appear
                                        over. For browsers that support the backdrop-filter CSS property, we’ll also attempt to blur the
                                        elements under a toast.</p>
                                </div>
                                <div class="card-content bg-dark">
                                    <div class="card-body">
                                        <div class="toast toast-wrapper toast-translucent" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header">
                                                <img src="admin/app-assets/images/logo/logo.png" class="rounded mr-2" alt="Toast image">
                                                <strong class="mr-auto">Contact Information</strong>
                                                &nbsp; <small>AVAILABLE 24-7</small>
                                                <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="toast-body">
                                                <div class="support-contact">
                                                    <!-- Phone, email and address with font awesome icon -->
                                                    
                                                    <p><i class="fa fa-phone"></i>&nbsp; Phone<strong>:</strong> 0244-99991</p>
                                                    <hr />
                                                    <p><i class="fa fa-envelope"></i>&nbsp; Email<strong>:</strong> example@gmail.com</p>
                                                    <hr />
                                                    <p><i class="fa fa-home"></i>&nbsp; Address<strong>:</strong> Accra, Ghana </p>
                                    <hr />
                            <p><i class="fa fa-facebook"></i>&nbsp; Facebook<strong>:</strong> facebook.com/example </p>
                                    <hr />              
                                                    <!-- Button -->
                                                  
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4 class="title">Placement</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="mt-1">This site is accessible to
                                        </p>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <a href = ""><i class = "fa fa-windows fa-5x use"></i>
                                            <p class = "body center">Microsoft Windows</p>
                                            </a>
                                        </div>	
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <a href = ""><i class = "fa fa-android fa-5x use android"></i>
                                            <p class = "body center">Android Os</p>
                                            </a>
                                        </div>	
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <a href = ""><i class = "fa fa-apple fa-5x use apple"></i>
                                            <p class = "body center">Apple Os</p>
                                            </a>
                                        </div>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- toast stacking and placement starts -->
                </section>           
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->


                <!-- Inverse table end -->
                <!-- Hoverable rows end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include 'footer.php';?> 
    <!-- END: Footer-->


    <?php include 'script.php';?>

    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>