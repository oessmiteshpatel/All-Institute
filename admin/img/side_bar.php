<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:index.php');
}
?>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Aere</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/bvalidator.css"/>


        <!-- EOF CSS INCLUDE -->  
        <!-- this query is for datepeeker  -->
        <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">

    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="home.php">Aere</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">

                        </a>

                    </li>


                    <li class="xn-openable">
                        <a href="view_Registration.php"><span class="fa fa-files-o"></span> <span class="xn-text">  Registration</span></a>
                        <!--
                       <ul>
                          <li><a href="add_emp.php"><span class="fa fa-image"></span> Add Employ</a></li>
                          <li><a href="view_Registration.php"><span class="fa fa-image"></span>  Registration</a></li>
                         
                       </ul>
                        -->
                    </li>
                    
                    <li class="xn-openable">
                        <a href="view_CourseRegistered.php"><span class="fa fa-files-o"></span> <span class="xn-text">Course Registered</span></a>
                        <!--
                       <ul>
                          <li><a href="add_emp.php"><span class="fa fa-image"></span> Add Employ</a></li>
                          <li><a href="view_Registration.php"><span class="fa fa-image"></span>  Registration</a></li>
                         
                       </ul>
                        -->
                    </li>
                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">  Course</span></a>
                        <ul>
                            <li><a href="view_Course.php"><span class="fa fa-image"></span> List Of  Course</a></li>
                            <li><a href="add_Course.php"><span class="fa fa-image"></span> Add Course</a></li>
                           <!-- <li><a href="Register_User.php"><span class="fa fa-image"></span> Register User</a></li>-->


                        </ul>
                    </li>

                    <li class="xn-openable">
                        <a href="change_pass.php"><span class="fa fa-files-o"></span> <span class="xn-text"> Change Password </span></a>
                        <!--
                        <ul>
                            
                            <li><a href="change_pass.php"><span class="fa fa-image"></span> Change Password </a></li>
                        </ul>
                        -->
                    </li>




                </ul>
                <!-- END X-NAVIGATION -->
            </div>