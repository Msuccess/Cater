 <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="dashboard.php">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">PERBTOCOL</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="dashboard.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">DASHBOARD</span></a>
                </li>
            <hr>
                <li class=" nav-item"><a href="reservation.php"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="User">RESERVATION</span></a>
                    <ul class="menu-content">
                
                     <li class=" nav-item"><a href="reservation.php"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="Ecommerce">Confirmed</span></a>
  
                </li>
                                <li class=" nav-item"><a href="pending.php"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="User">Pending</span></a>
                                  </li>  
                <li class=" nav-item"><a href="finished.php"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="Chat">Finished</span></a>
                </li>
                <li class=" nav-item"><a href="cancelled.php"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="Todo">Cancelled</span></a>
                </li>
            </ul>
            </li>

            <hr>
                  <li class=" nav-item"><a href="menu.php"><i class="feather icon-menu"></i><span class="menu-title" data-i18n="Profile">MENU </span></a>
                    <ul class="menu-content">
                        <li><a href="menu.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Add Menu</span></a>
                        </li>
                        <li><a href="category.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Menu Type</span></a>
                        </li>
                        <li><a href="subcategory.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Category Type</span></a>
                        </li>
                        <li class=" nav-item"><a href="combo.php"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="Profile">Combo Menu</span></a>
                </li>
                    </ul>
                </li>
               
            <hr>
               
                 <li><a href="event.php"><i class="ficon feather icon-calendar"></i><span class="menu-item" data-i18n="Wish List">EVENTS</span></a>
                            <hr>

                <li class=" nav-item"><a href="messages.php"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Profile">MESSAGES</span></a>
                </li>
            <hr>
                  <li class=" nav-item"><a href="#l"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Profile">MEMBERS </span></a>
                    <ul class="menu-content">
                        <li><a href="members.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Add Members</span></a>
                        </li>
                        <li><a href="teams.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Create Team</span></a>
                        </li>
                        <li><a href="team_members.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Manage Team</span></a>
                        </li>
                        
                    </ul>
                </li>

                 <hr>
                  <li class=" nav-item"><a href="#l"><i class="feather icon-activity"></i><span class="menu-title" data-i18n="Profile">REPORTS </span></a>
                    <ul class="menu-content">
                        <li><a href="#reserve" data-toggle="modal"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Reservation Report</span></a>
                        </li>
                        <li><a href="#sales" data-toggle="modal"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Monthly Report</span></a>
                        
                    </ul>
                </li>

                <hr>
                <li class=" navigation-header"><span>USERS</span>
                </li>
                <li class=" nav-item"><a href="user.php"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Profile">PROFILE</span></a>
                </li>
                <li class=" nav-item"><a href="logout.php"><i class="feather icon-help-circle"></i><span class="menu-title" data-i18n="FAQ">LOG OUT</span></a>
                </li>
               
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
    <?php include 'report_modal.php'; ?>
    <?php include 'report_sales.php'; ?>