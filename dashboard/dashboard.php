﻿<?php


	include '../conn.php';
	


$sql2 = "select count(*) from gap_analysis where status='2'";

list($value2) = @mysql_fetch_row(mysql_query($sql2));

$count2 = ($value2/ 118) *100;

$sql3 = "select count(*) from gap_analysis where status='3'";

list($value3) = @mysql_fetch_row(mysql_query($sql3));


$count3 = ($value3/ 118) *100;

	$sql = "select count(*) from gap_analysis where status='1'";
	
list($value) = @mysql_fetch_row(mysql_query($sql));

$count = ((118 - ($value+$value2+$value3)) / 118 )*100;
?>

<!DOCTYPE html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Blank Page</title>
        <meta name="description" content="Softcare Apps, ISO 27001">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap-responsive.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/Font-awesome/css/font-awesome.min.css"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/style.css"/>
        
        <link rel="stylesheet" href="../assets/css/theme.css">
        
        <link rel="stylesheet" href="style.css"/>
        
                <link href="../css/easyui.css" rel="stylesheet" type="text/css">
	<link href="../css/demo.css"  rel="stylesheet" type="text/css">
	<link href="../css/icon.css"  rel="stylesheet" type="text/css">
	
        <script type="text/javascript" src="../assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>        
        <script type="text/javascript" src="../assets/js/vendor/bootstrap.min.js"></script>        
        
        <script type="text/javascript" src="../assets/js/style-switcher.js"></script>
        
        
        
    
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if IE 7]>
        <link type="text/css" rel="stylesheet" href="../assets/Font-awesome/css/font-awesome-ie7.min.css"/>
        <![endif]-->
        
        
        <!-- from my works -->
        




        <!-- end of from my works -->
        
    </head>
    <body>
        <!-- #wrap -->
        <div id="wrap">
            <!-- #top -->
            <div id="top">
                <!-- .navbar -->
                <div class="navbar navbar-inverse navbar-static-top">
                    <div class="navbar-inner">
                        <div class="container-fluid">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                           <div class="brand"> <div class="sc_logo"><a href="../../index.html"></a> </div></div><!-- .topnav -->
                            <div class="btn-toolbar topnav">
                                <div class="btn-group">
                                    <a id="changeSidebarPos" class="btn btn-success" rel="tooltip"
                                    data-original-title="Show / Hide Sidebar" data-placement="bottom">
                                        <i class="icon-resize-horizontal"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-inverse" rel="tooltip" data-original-title="E-mail" data-placement="bottom">
                                        <i class="icon-envelope"></i>
                                        <span class="label label-warning">5</span>
                                    </a>
                                    <a class="btn btn-inverse" rel="tooltip" href="#" data-original-title="Messages"
                                       data-placement="bottom">
                                        <i class="icon-comments"></i>
                                        <span class="label label-important">4</span>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-inverse" rel="tooltip" href="#" data-original-title="Document"
                                       data-placement="bottom">
                                        <i class="icon-file"></i>
                                    </a>
                                    <a href="#helpModal" class="btn btn-inverse" rel="tooltip" data-placement="bottom"
                                       data-original-title="Help" data-toggle="modal">
                                        <i class="icon-question-sign"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-inverse" data-placement="bottom" data-original-title="Logout" rel="tooltip"
                                       href="#"><i class="icon-off"></i></a></div>
                            </div>
                            <!-- /.topnav -->
                            <div class="nav-collapse collapse">
                                <!-- .nav -->
                                <ul class="nav">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li><a href="#">File Manager</a></li>
                                    <li class="dropdown ">
                                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                            Form Elements <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">General</a></li>
                                            <li><a href="#">Validation</a></li>
                                            <li><a href="#">WYSIWYG</a></li>
                                            <li><a href="#">Wizard &amp; File Upload</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- /.nav -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.navbar -->
            </div>
            <!-- /#top -->
            <!-- .head -->
            <header class="head">
                <div class="search-bar">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="search-bar-inner">
                                <a id="menu-toggle" href="#menu" data-toggle="collapse"
                                   class="accordion-toggle btn btn-inverse visible-phone"
                                   rel="tooltip" data-placement="bottom" data-original-title="Show/Hide Menu">
                                    <i class="icon-sort"></i>
                                </a>
                                <form class="main-search">
                                    <input class="input-block-level" type="text" placeholder="Live search...">
                                    <button id="searchBtn" type="submit" class="btn btn-inverse"><i class="icon-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ."main-bar -->
                <div class="main-bar">
                    <div class="container-fluid">
                        <div class="row-fluid">
                            <div class="span12">
                                <h3><i class="icon-check-empty"></i> Asset Register</h3>
                            </div>
                        </div>
                        <!-- /.row-fluid -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.main-bar -->
            </header>
            <!-- /.head -->

            <!-- #left -->
            <div id="left">
                <!-- .user-media -->
                <div class="media user-media hidden-phone">
                    <a href="#" class="user-link">
                        <img src="../assets/img/user.gif" alt="User" class="media-object img-polaroid user-img">
                        <span class="label user-label">16</span>
                    </a>
                    <div class="media-body hidden-tablet">
                        <h5 class="media-heading">Archie</h5>
                        <ul class="unstyled user-info">
                            <li><a href="#">Administrator</a></li>
                            <li>Last Access : <br/>
                                <small><i class="icon-calendar"></i> 16 Mar 16:32</small>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.user-media -->
                <!-- #menu -->
                <ul id="menu" class="unstyled accordion collapse in">
                    <li class="accordion-group active">
                        <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#dashboard-nav">
                            <i class="icon-dashboard icon-large"></i> Dashboard <span
                                class="label label-inverse pull-right">2</span>
                        </a>
                        <ul class="collapse" id="dashboard-nav">
                            <li><a href="#"><i class="icon-angle-right"></i> Default Style</a></li>
                            <li><a href="#"><i class="icon-angle-right"></i> Alternative Style</a></li>
                        </ul>
                    </li>
                    <li><a href="../scope/scope.php"><i class="icon-table icon-large"></i> Scope</a></li>
                    <li class="accordion-groups">
                        <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                            <i class="icon-tasks icon-large"></i>Asset Register <span
                                class="label label-inverse pull-right">8</span>
                        </a>
                        <ul class="collapse " id="component-nav">
                            <li><a href="../business_db/business_asset.php"><i class="icon-angle-right"></i> Business Database </a></li>
                            <li><a href="../digital_asset/digital_asset.php"><i class="icon-angle-right"></i> Digital Asset</a></li>
                            <li><a href="#"><i class="icon-angle-right"></i> Source Code</a></li>
                            <li><a href="#"><i class="icon-angle-right"></i> Software</a></li>
                            <li><a href="#"><i class="icon-angle-right"></i> Non Digital Asset</a></li>
                            <li><a href="#"><i class="icon-angle-right"></i> People Asset</a></li>
                            <li><a href="#"><i class="icon-angle-right"></i> Network Devices</a></li>
                            <li><a href="#"><i class="icon-angle-right"></i> Desktops</a></li>
                            <li><a href="#"><i class="icon-angle-right"></i> Laptops</a></li>
                            <li><a href="#"><i class="icon-angle-right"></i> Media</a></li>
                            <li><a href="#"><i class="icon-angle-right"></i> Support Utilities</a></li>
                           
                        </ul>
                    </li>

                    
                    <li><a href="#"><i class="icon-file icon-large"></i> Risk Assestment </a></li>
                          <li class="accordion-group"><a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#soa-nav" > <i class="icon-tasks icon-large"></i>Statement of Applicability <span
                                class="label label-inverse pull-right">2</span> </a>
        <ul class="collapse " id="soa-nav">
          <li><a href="../SOA/isms.php"><i class="icon-angle-right"></i> ISMS Mandatory</a></li>
          <li><a href="#"><i class="icon-angle-right"></i> Support Utilities</a></li>
        </ul>
      </li>
                    <li class="accordion-group ">
                        <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                            <i class="icon-warning-sign icon-large"></i> Organisation <span
                                class="label label-inverse pull-right">2</span>
                        </a>
                        <ul class="collapse" id="error-nav">
                            <li><a href="../organization/company.php"><i class="icon-angle-right"></i> Organisation Data</a></li>
                            <li><a href="#"><i class="icon-angle-right"></i> Other Details </a></li>

                        </ul>
                    </li>

                </ul>
                <!-- /#menu -->

            </div>
            <!-- /#left -->

            <!-- #content -->
            <div id="content" class="">
                <!-- .outer -->
                <div class="container-fluid outer">
                    <div class="row-fluid">
                        <!-- .inner -->
                        <div class="span12 inner">
                            <!-- content is here -->
                            
                           <h2>Dashboard</h2>

	not implemented
	<span4 class="chart" data-percent="<?php echo $count; ?>">

		<span class="percent"></span>
	</span4>
	partially 
<span2 class="chart" data-percent="<?php echo $count2; ?>">

		<span class="percent"></span>
	</span2>
fully
	<span3 class="chart" data-percent="<?php echo $count3; ?>">
	
		<span class="percent"></span>
	</span3>

						   
                       <!-- /.inner -->
                    </div>
                    <!-- /.row-fluid -->
                </div>
                <!-- /.outer -->
            </div>
            <!-- /#content -->
            <!-- #push do not remove -->
            <div id="push"></div>
            <!-- /#push -->
        </div>
        <!-- /#wrap -->

        <div class="clearfix"></div>
        <div id="footer">
            <p>2013 © Softcare Apps</p>
        </div>


        <!-- #helpModal -->
        <div id="helpModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel"
             aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>
                <h3 id="helpModalLabel"><i class="icon-external-link"></i> Help</h3>
            </div>
            <div class="modal-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="modal-footer">

                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
        <!-- /#helpModal -->

</div>
	<script src="../dist/easypiechart.min.js"></script>
	<script>
	document.addEventListener('DOMContentLoaded', function() {
		var chart = window.chart = new EasyPieChart(document.querySelector('span4'), {
			easing: 'easeOutElastic',
			lineWidth: 10,
			delay: 6000,
			onStep: function(from, to, percent) {
				this.el.children[0].innerHTML = Math.round(percent);
			}
		});



	});
	
		document.addEventListener('DOMContentLoaded', function() {
		var chart = window.chart = new EasyPieChart(document.querySelector('span2'), {
			easing: 'easeOutElastic',
			lineWidth: 10,
			delay: 6000,
			
			onStep: function(from, to, percent) {
				this.el.children[0].innerHTML = Math.round(percent);
			}
		});



	});
			document.addEventListener('DOMContentLoaded', function() {
		var chart = window.chart = new EasyPieChart(document.querySelector('span3'), {
			easing: 'easeOutElastic',
			lineWidth: 10,
			delay: 6000,
			
			onStep: function(from, to, percent) {
				this.el.children[0].innerHTML = Math.round(percent);
			}
		});



	});
	</script>
    </body>
</html>
