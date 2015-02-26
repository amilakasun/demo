<!DOCTYPE html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Login Page</title>
        <meta name="description" content="Softcare Apps, ISO 27001">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css"/>
        <link type="text/css" rel="stylesheet" href="assets/Font-awesome/css/font-awesome.min.css"/>
        <link type="text/css" rel="stylesheet" href="assets/css/style.css"/>

        <link rel="stylesheet" href="assets/css/theme.css">

        <link rel="stylesheet" href="style.css"/>

        <link href="css/easyui.css" rel="stylesheet" type="text/css">
        <link href="css/demo.css"  rel="stylesheet" type="text/css">
        <link href="css/icon.css"  rel="stylesheet" type="text/css">

        <script type="text/javascript" src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>        
        <script type="text/javascript" src="assets/js/vendor/bootstrap.min.js"></script>        


        <script type="text/javascript">sfdsf
            
                
            function user_login(){
                $.ajaxSetup ({
                    cache: false
                });
                document.getElementById("result").innerHTML = "Loading Please Wait...";
                var user_name=document.getElementById("user_name").value;
                var password=document.getElementById("password").value;
                
                if(user_name=="" || password==""){
                    alert("Please Enter Full Details");
                    document.getElementById("result").innerHTML = "Please Enter Full Details";
                }else{
                $.post("user_login.php",{
        
                    user_name:user_name,
                    password:password
                   
    
                },function(res){
                    if(res == "Success"){
                        window.location.assign("dashboard/dashboard.php");
                    }else {
            
                        document.getElementById("result").innerHTML = res;  
                    }
    
                } , 'text');

}
            }
                
        </script>



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

        <?php
        include('user_login.php'); // Includes Login Script

        if (isset($_SESSION['login_user'])) {
            header("location: dashboard/dashboard.php");
        }
        ?>
        <!-- #wrap -->
        <div id="wrap">
            <!-- #top -->
            <div id="top">
                <!-- .navbar -->
                <div class="navbar navbar-inverse navbar-static-top">

                </div>
                <!-- /.navbar -->
            </div>
            <!-- /#top -->
            <!-- .head -->
            <header class="head">
                <div class="search-bar">
                    <div class="row-fluid">
                        <div class="span12">

                        </div>
                    </div>
                </div>
                <!-- ."main-bar -->
                <div class="main-bar">
                    <div class="container-fluid">
                        <div class="row-fluid">
                            <div class="span12">
                                <h3><i class="icon-check-empty"></i> User Login</h3>
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


            </div>
            <!-- /#left -->

            <!-- #content -->
            <div id="content" class="">
                <!-- .outer -->
                <div class="container-fluid outer">
                    <div class="row-fluid">
                        <!-- .inner -->
                        <div class="span7 inner">
                            <!-- content is here -->
                            <center>
                            <br />
                            
                            <table>
                                <tr>
                                    <td>User Name</td>
                                    <td>:</td>
                                    <td><input type="text" id="user_name" name="user_name" /></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><input type="password" id="password" name="password" /></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><input name="submit" class="btn btn-metis-1" id="submit" type="button" value="Login"  onclick="user_login()"/></td>
                                </tr>
                            </table>
                            <br />
                            <div id="result"  style="color: red;">

                            </div>
                            <br />
                           
                            <table>
                                <tr>
                                    <td>If you are not a member? <a href="user_register.php" style="color: blue; text-decoration: underline; "> Register Here </a></td>
                                </tr>
                            </table>
 </center>
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
                <p>2015 © Softcare Apps</p>
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
        <script src="dist/easypiechart.min.js"></script>

    </body>
</html>
