<?php

include "../../../../phpFunctionsUserDefined.php";
include "../../../../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

    <title>Update Basic Details </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="../../css/bootstrap-extend.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="../../css/master_style.css">

	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="../../css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="../../../images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="../../../images/logo-dark.png" alt="logo"></span>
	  </b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="../../../images/logo-light-text.png" alt="logo" class="light-logo">
	  	  <img src="../../../images/logo-dark-text.png" alt="logo" class="dark-logo">
	  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  
		  <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
			</form>
          </li>			
		  
          <!-- Messages -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-email"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">You have 5 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Lorem Ipsum
                          <small><i class="fa fa-clock-o"></i> 15 mins</small>
                         </h4>
                         <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                      </div>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Nullam tempor
                          <small><i class="fa fa-clock-o"></i> 4 hours</small>
                         </h4>
                         <span>Curabitur facilisis erat quis metus congue viverra.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Proin venenatis
                          <small><i class="fa fa-clock-o"></i> Today</small>
                         </h4>
                         <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Praesent suscipit
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                         </h4>
                         <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Donec tempor
                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                         </h4>
                         <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See all e-Mails</a></li>
            </ul>
          </li>
          <!-- Notifications -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">You have 7 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> Curabitur id eros quis nunc suscipit blandit.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> In gravida mauris et nisi
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Praesent eu lacus in libero dictum fermentum.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Nunc fringilla lorem 
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-message"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">You have 6 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Lorem ipsum dolor sit amet
                        <small class="pull-right">30%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 30%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">30% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Vestibulum nec ligula
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-danger" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Donec id leo ut ipsum
                        <small class="pull-right">70%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-light-blue" style="width: 70%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">70% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Praesent vitae tellus
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Nam varius sapien
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Nunc fringilla
                        <small class="pull-right">90%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-primary" style="width: 90%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">90% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
		  <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../../images/user5-128x128.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="../../../images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">

                <p>
                  Romi Roy
                  <small class="mb-5">jb@gmail.com</small>
                  <a href="#" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters">
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-person"></i> My Profile</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-settings"></i> Setting</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="#"><i class="ti-settings"></i> Account Setting</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="#"><i class="fa fa-power-off"></i> Logout</a>
                  </div>				
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
		 <div class="ulogo">
			 <a href="index.html">
			  <!-- logo for regular state and mobile devices -->
			  <span><b>Crypto </b>Admin</span>
			</a>
		</div>
        <div class="image">
          <img src="../../../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
          <p>Admin Template</p>
			<a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
            <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ion ion-android-mail"></i></a>
            <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
        </div>
      </div>
      
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="nav-devider"></li>
        <li class="header nav-small-cap">PERSONAL</li>
        <li>
          <a href="../../index.html">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-chart"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../reports/transactions.html">Transactions</a></li>
            <li><a href="../reports/top-gainers-losers.html">Top Gainers/Losers</a></li>
            <li><a href="../reports/market-capitalizations.html">Market Capitalizations</a></li>
            <li><a href="../reports/crypto-stats.html">Crypto Stats</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-compass"></i>
            <span>Initial Coin Offering</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../ico/ico-distribution-countdown.html">Countdown</a></li>
            <li><a href="../ico/ico-roadmap-timeline.html">Roadmap/Timeline</a></li>
            <li><a href="../ico/ico-progress.html">Progress Bar</a></li>
            <li><a href="../ico/ico-details.html">Details</a></li>
            <li><a href="../ico/ico-listing.html">ICO Listing</a></li>
            <li><a href="../ico/ico-filter.html">ICO Listing - Filters</a></li>			  
          </ul>
        </li>
        <li>
          <a href="../currency-ex/exchange.html">
            <i class="icon-refresh"></i> <span>Currency Exchange</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-people"></i>
            <span>Members</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../members/members.html">Members Grid</a></li>
            <li><a href="../members/members-list.html">Members List</a></li>
            <li><a href="../members/member-profile.html">Member Profile</a></li>			  
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-equalizer"></i>
            <span>Tickers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../tickers/tickers.html">Ticker</a></li>
            <li><a href="../tickers/crypto-live-pricing.html">Live Crypto Prices</a></li>		  
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-wallet"></i>
            <span>Transactions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../transactions/tables-transactions.html">Transactions Tables</a></li>
            <li><a href="../transactions/transaction-search.html">Transactions Search</a></li>	
            <li><a href="../transactions/transaction-details.html">Single Transaction</a></li>
            <li><a href="../transactions/counter-transactions.html">Transactions Counter</a></li>	  
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="icon-graph"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../charts/chartjs.html">ChartJS</a></li>
            <li><a href="../charts/flot.html">Flot</a></li>
            <li><a href="../charts/inline.html">Inline charts</a></li>
            <li><a href="../charts/morris.html">Morris</a></li>
            <li><a href="../charts/peity.html">Peity</a></li>
            <li><a href="../charts/chartist.html">Chartist</a></li>
            <li><a href="../charts/rickshaw-charts.html">Rickshaw Charts</a></li>
            <li><a href="../charts/nvd3-charts.html">NVD3 Charts</a></li>
			<li><a href="../charts/echart.html">eChart</a></li>
			<li><a href="../amcharts/amcharts.html">amCharts Charts</a></li>
			<li><a href="../amcharts/amstock-charts.html">amCharts Stock Charts</a></li>
			<li><a href="../amcharts/ammaps.html">amCharts Maps</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>App</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="app-chat.html">Chat app</a></li>
            <li><a href="project-table.html">Project</a></li>
            <li class="active"><a href="app-contact.html">Contact / Employee</a></li>
            <li><a href="app-ticket.html">Support Ticket</a></li>
			<li><a href="calendar.html">Calendar</a></li>
            <li><a href="profile.html">Profile</a></li>
            <li><a href="userlist-grid.html">Userlist Grid</a></li>
			<li><a href="userlist.html">Userlist</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../mailbox/mailbox.html">Inbox</a></li>
            <li><a href="../mailbox/compose.html">Compose</a></li>
            <li><a href="../mailbox/read-mail.html">Read</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../UI/badges.html">Badges</a></li>
            <li><a href="../UI/border-utilities.html">Border</a></li>
            <li><a href="../UI/buttons.html">Buttons</a></li>
            <li><a href="../UI/bootstrap-switch.html">Bootstrap Switch</a></li>
            <li><a href="../UI/cards.html">User Card</a></li>
            <li><a href="../UI/color-utilities.html">Color</a></li>
			<li><a href="../UI/date-paginator.html">Date Paginator</a></li>
            <li><a href="../UI/dropdown.html">Dropdown</a></li>
            <li><a href="../UI/dropdown-grid.html">Dropdown Grid</a></li>
            <li><a href="../UI/general.html">General</a></li>
            <li><a href="../UI/icons.html">Icons</a></li>
            <li><a href="../UI/media-advanced.html">Advanced Medias</a></li>
			<li><a href="../UI/modals.html">Modals</a></li>
            <li><a href="../UI/nestable.html">Nestable</a></li>
            <li><a href="../UI/notification.html">Notification</a></li>
            <li><a href="../UI/portlet-draggable.html">Draggable Portlets</a></li>
            <li><a href="../UI/ribbons.html">Ribbons</a></li>
            <li><a href="../UI/sliders.html">Sliders</a></li>
            <li><a href="../UI/sweatalert.html">Sweet Alert</a></li>
            <li><a href="../UI/tab.html">Tabs</a></li>
            <li><a href="../UI/timeline.html">Timeline</a></li>
            <li><a href="../UI/timeline-horizontal.html">Horizontal Timeline</a></li>			  
          </ul>
        </li>
        <li class="header nav-small-cap">FORMS, TABLE & LAYOUTS</li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-bars"></i>
            <span>Widgets</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../widgets/blog.html">Blog</a></li>
            <li><a href="../widgets/chart.html">Chart</a></li>
            <li><a href="../widgets/list.html">List</a></li>
            <li><a href="../widgets/social.html">Social</a></li>
            <li><a href="../widgets/statistic.html">Statistic</a></li>
            <li><a href="../widgets/tiles.html">Tiles</a></li>
            <li><a href="../widgets/weather.html">Weather</a></li>
            <li><a href="../widgets/widgets.html">Widgets</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/boxed.html">Boxed</a></li>
            <li><a href="../layout/fixed.html">Fixed</a></li>
            <li><a href="../layout/collapsed-sidebar.html">Collapsed Sidebar</a></li>
          </ul>
        </li>		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-square-o"></i>
            <span>Box</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../box/advanced.html">Advanced</a></li>
            <li><a href="../box/basic.html">Boxed</a></li>
            <li><a href="../box/color.html">Color</a></li>
			<li><a href="../box/group.html">Group</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../forms/advanced.html">Advanced Elements</a></li>
            <li><a href="../forms/code-editor.html">Code Editor</a></li>
            <li><a href="../forms/editor-markdown.html">Markdown</a></li>
            <li><a href="../forms/editors.html">Editors</a></li>
            <li><a href="../forms/form-validation.html">Form Validation</a></li>
            <li><a href="../forms/form-wizard.html">Form Wizard</a></li>
            <li><a href="../forms/general.html">General Elements</a></li>
            <li><a href="../forms/mask.html">Formatter</a></li>
            <li><a href="../forms/premade.html">Pre-made Forms</a></li>
            <li><a href="../forms/xeditable.html">Xeditable Editor</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../tables/simple.html">Simple tables</a></li>
            <li><a href="../tables/data.html">Data tables</a></li>
            <li><a href="../tables/editable-tables.html">Editable Tables</a></li>
            <li><a href="../tables/table-color.html">Table Color</a></li>
          </ul>

        </li>
		<li>
          <a href="../email/index.html">
            <i class="fa fa-envelope-open-o"></i> <span>Emails</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
		<li class="header nav-small-cap">EXTRA COMPONENTS</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-map"></i> <span>Map</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../map/map-google.html">Google Map</a></li>
            <li><a href="../map/map-vector.html">Vector Map</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-plug"></i> <span>Extension</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../extension/fullscreen.html">Fullscreen</a></li>
          </ul>
        </li>        
		<li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Sample Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../samplepage/blank.html">Blank</a></li>
            <li><a href="../samplepage/coming-soon.html">Coming Soon</a></li>
            <li><a href="../samplepage/custom-scroll.html">Custom Scrolls</a></li>
			<li><a href="../samplepage/faq.html">FAQ</a></li>
			<li><a href="../samplepage/gallery.html">Gallery</a></li>
			<li><a href="../samplepage/invoice.html">Invoice</a></li>
			<li><a href="../samplepage/lightbox.html">Lightbox Popup</a></li>
			<li><a href="../samplepage/pace.html">Pace</a></li>
			<li><a href="../samplepage/pricing.html">Pricing</a></li>
            <li class="treeview">
              <a href="#">Authentication 
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../samplepage/login.html">Login</a></li>
                <li><a href="../samplepage/register.html">Register</a></li>
                <li><a href="../samplepage/lockscreen.html">Lockscreen</a></li>
                <li><a href="../samplepage/user-pass.html">Recover password</a></li>				  
              </ul>
            </li>            
			<li class="treeview">
              <a href="#">Error Pages 
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../samplepage/404.html">404</a></li>
                <li><a href="../samplepage/500.html">500</a></li>
                <li><a href="../samplepage/maintenance.html">Maintenance</a></li>		  
              </ul>
            </li> 
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Level One</a></li>
            <li class="treeview">
              <a href="#">Level One
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Level Two</a></li>
                <li class="treeview">
                  <a href="#">Level Two
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#">Level Three</a></li>
                    <li><a href="#">Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Level One</a></li>
          </ul>
        </li>        
        
      </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Update Basic Details
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Update</a></li>
        <li class="breadcrumb-item active">Basic</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
		<div class="col-lg-3 col-md-6 col-12">
		  <div class="info-box pull-up bg-hexagons-dark">
			<span class="info-box-icon bg-primary"><i class="fa fa-drivers-license-o"></i></span>

			<div class="info-box-content pull-right text-right">
			  <span class="info-box-number">Work</span>
			  <span class="info-box-text">103</span>
			</div>
			<!-- /.info-box-content -->
		  </div>
		  <!-- /.info-box -->
		</div>
		<div class="col-lg-3 col-md-6 col-12">
		  <div class="info-box pull-up bg-hexagons-dark">
			<span class="info-box-icon bg-danger"><i class="fa fa-users"></i></span>

			<div class="info-box-content pull-right text-right">
			  <span class="info-box-number">Family</span>
			  <span class="info-box-text">19</span>
			</div>
			<!-- /.info-box-content -->
		  </div>
		  <!-- /.info-box -->
		</div>
		<div class="col-lg-3 col-md-6 col-12">
		  <div class="info-box pull-up bg-hexagons-dark">
			<span class="info-box-icon bg-info"><i class="fa fa-user"></i></span>

			<div class="info-box-content pull-right text-right">
			  <span class="info-box-number">Friends</span>
			  <span class="info-box-text">623</span>
			</div>
			<!-- /.info-box-content -->
		  </div>
		  <!-- /.info-box -->
		</div>
		<div class="col-lg-3 col-md-6 col-12">
		  <div class="info-box pull-up bg-hexagons-dark">
			<span class="info-box-icon bg-success"><i class="fa fa-shield"></i></span>

			<div class="info-box-content pull-right text-right">
			  <span class="info-box-number">Private</span>
			  <span class="info-box-text">53</span>
			</div>
			<!-- /.info-box-content -->
		  </div>
		  <!-- /.info-box -->
		</div>
        <div class="col-3">
			<div class="box box-inverse box-dark bg-hexagons-white">
				<div class="box-body">
				  <div class="contact-page-aside">
					<ul class="list-style-none font-size-16">
						
						<li class="divider"></li>
						<li class="box-label"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="btn btn-info text-white mt-10">+ Add New Source</a></li>	
					</ul>					  
				</div>
			  </div>
            </div>
          <!-- /. box -->
        </div>
		<div class="col-3">
			<div class="box box-inverse box-dark bg-hexagons-white">
				<div class="box-body">
				  <div class="contact-page-aside">
					<ul class="list-style-none font-size-16">
						
						<li class="divider"></li>
						<li class="box-label"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal1" class="btn btn-info text-white mt-10">+ Add ICMR Data Source</a></li>	
					</ul>					  
				</div>
			  </div>
            </div>
          <!-- /. box -->
        </div>
		<div class="col-3">
			<div class="box box-inverse box-dark bg-hexagons-white">
				<div class="box-body">
				  <div class="contact-page-aside">
					<ul class="list-style-none font-size-16">
						
						<li class="divider"></li>
						<li class="box-label"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal2" class="btn btn-info text-white mt-10">+ Add Marquee</a></li>	
					</ul>					  
				</div>
			  </div>
            </div>
          <!-- /. box -->
        </div>
		<div class="col-3">
			<div class="box box-inverse box-dark bg-hexagons-white">
				<div class="box-body">
				  <div class="contact-page-aside">
					<ul class="list-style-none font-size-16">
						
						<li class="divider"></li>
						<li class="box-label"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModa4" class="btn btn-info text-white mt-10">+ Add New Source</a></li>	
					</ul>					  
				</div>
			  </div>
            </div>
          <!-- /. box -->
        </div>
		  <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Add Lable</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
						</div>
						<div class="modal-body">
							<form class="form-horizontal">
								<div class="form-group">
									<label class="col-md-12">State</label>
									<div class="col-md-12">
										<input type="text" class="form-control" id="stateLocation" placeholder="type state"> </div>
								</div>
								<div class="form-group">
									<label class="col-md-12">Location</label>
									<div class="col-md-12">
										<input type="text" class="form-control" id = "locationURL" placeholder="type url"> </div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
							<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<div id="myModal1" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Add Lable</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
						</div>
						<div class="modal-body">
							<form class="form-horizontal">
								<div class="form-group">
									<label class="col-md-12">State</label>
									<div class="col-md-12">
										<input type="text" class="form-control" id="stateLocation" placeholder="type state"> </div>
								</div>
								<div class="form-group">
									<label class="col-md-12">Location</label>
									<div class="col-md-12">
										<input type="text" class="form-control" id = "locationURL" placeholder="type url"> </div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
							<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<div id="myModal2" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Add ICMR</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
						</div>
						<div class="modal-body">
							<form class="form-horizontal">
							    <div class="form-group">
									<label class="col-md-12">Date</label>
									<div class="col-md-12">
										<input type="text" class="form-control" id="dateTesting" placeholder="type dat"> </div>
								</div>
								<div class="form-group">
									<label class="col-md-12">Total Testing</label>
									<div class="col-md-12">
										<input type="text" class="form-control" id="totalTest" placeholder="type Total test"> </div>
								</div>
								<div class="form-group">
									<label class="col-md-12">Today's Test</label>
									<div class="col-md-12">
										<input type="text" class="form-control" id = "todayTest" placeholder="type today's Test"> </div>
								</div>
								<div class="form-group">
									<label class="col-md-12">Source</label>
									<div class="col-md-12">
										<input type="text" class="form-control" id="source" placeholder="type source"> </div>
								</div>
								<div class="form-group">
									<label class="col-md-12">comment</label>
									<div class="col-md-12">
										<input type="text" class="form-control" id = "comment" placeholder="type comment"> </div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-info icmrtestupdate" data-dismiss="modal">Save</button>
							<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
        <!-- /.col -->
        <div class="col-md-12">
          <div class="box">
			    <div class="box-header with-border">
				  <h3 class="box-title">State Data</h3>
				</div>
            <div class="box-body">
              <div class="table-responsive">
				<table id="employeelist" class="table table-hover no-wrap" data-page-size="10">
					<thead>
						<tr>
							<th>No</th>
							<th>State</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php getStateDistrictUpdateStatus($con) ?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2">
								<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-contact">Add New Contact</button>
							</td>							
							<td colspan="7">
								<div class="text-right">
									<ul class="pagination"> </ul>
								</div>
							</td>
						</tr>
					</tfoot>
				</table>
				  <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel2">Add New Contact</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
										</div>
										<div class="modal-body">
											<form class="form-horizontal form-element">												
												<div class="col-md-12 m-b-20">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Type name"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Email"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Phone"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Designation"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Age"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Date of joining"> </div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Salary"> </div>
													<div class="form-group">
														<div class="fileupload btn btn-danger">
															<div class="file-group">
															  <span><i class="fa fa-camera file-browser mr-10"></i>Upload Contact Image</span>
															  <input type="file">
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
											<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
										</div>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
			</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
   
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2018 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development 
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="report_panel" class="chk-col-grey" >
			<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

            <p>
              general settings information
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="allow_mail" class="chk-col-grey" >
			<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="expose_author" class="chk-col-grey" >
			<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="show_me_online" class="chk-col-grey" >
			<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="off_notifications" class="chk-col-grey" >
			<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">              
              <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
              Delete chat history
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="../../../assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="../../../assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="../../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- jQuery UI 1.11.4 -->
	<script src="../../../assets/vendor_components/jquery-ui/jquery-ui.min.js"></script>
	
	<!-- DataTables -->
	<script src="../../../assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../../../assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	
	<!-- This is data table -->
    <script src="../../../assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="../../../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="../../../assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Crypto_Admin App -->
	<script src="../../js/template.js"></script>
	
	<!-- Crypto_Admin for demo purposes -->
	<script src="../../js/demo.js"></script>
	
	<!-- Crypto_Admin for Data Table -->
	<script src="../../js/pages/data-table.js"></script>
	
	<script>
	   // Update districtwise data
$(function(){
            $('#todayTest').keyup(function(){
				var today = new Date();
				var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
               $('#activeCases').val(date);
            });
})
         

$(".icmrtestupdate").click(function() {
//$('#updateDistrictDataForm').on('submit', function(e) {	
	 var today = new Date();
     var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
	  var dateTesting = $('#dateTesting').val();
	  var todayTest = $('#todayTest').val();
	  var totalTest = $('#totalTest').val();
	  var source = $('#source').val();
	  
	  $("#dateTesting").val(date).val();
	
	  alert(date);
	$.ajax({
            type:"POST",
            url: "../../../../src/updateICMRTestingData.php",
            data: {dateTesting:dateTesting, todayTest:todayTest, totalTest:totalTest, source:source }, // get all form field value in serialize form
			success: function(data){
			  
			  console.log(data);
              //$("#result").append(data);
			  alert(data);
              //$("#ajax-form").fadeOut();
			  
            }
        });
});
	</script>
	
	
</body>
</html>