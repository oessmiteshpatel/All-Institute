<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:index.php');
}
 $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>AERE</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.png" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/bvalidator.css"/>


        <!-- EOF CSS INCLUDE -->  
        <!-- this query is for datepeeker  -->
        <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
        <style>
            .sidebarlogo
            {
                
            }
        </style>
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="desbord.php" class="sidebarlogo" style="padding:5px;"><img src="assets/images/logo.png" width="90" absalign="middle"/></a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">

                        </a>
                    </li>

                    <li class=" <?php echo ($activePage == "desbord" ? "active" : ""); ?>">
                        <a href="desbord.php"><span class="fa fa-home"></span> <span class="xn-text">Dashboard</span></a>

                    </li>
                    <li class=" <?php echo ($activePage == "view_Registration" ? "active" : ""); ?>">
                        <a href="view_Registration.php"><span class="fa fa-users"></span> <span class="xn-text">Registered Users</span></a>

                    </li>
                    <li class=" <?php echo ($activePage == "view_CourseRegistered" ? "active" : ""); ?>">
                        <a href="view_CourseRegistered.php"><span class="fa fa-list"></span> <span class="xn-text">Users per Course</span></a>
                    </li>
                    <li class="xn-openable <?php echo ($activePage == "view_Course" ? "active" : ""); ?> <?php echo ($activePage == "add_Course" ? "active" : ""); ?>" >
                        <a href="#"><span class="fa fa-plus"></span> <span class="xn-text"> All about courses</span></a>

                        <ul>
                            <li class="<?php echo ($activePage == "view_Course" ? "active" : ""); ?>"><a href="view_Course.php"><span class="fa fa-list"></span> List of Courses</a></li>
                            <li class="<?php echo ($activePage == "add_Course" ? "active" : ""); ?>"><a href="add_Course.php"><span class="fa fa-plus"></span> Add Course</a></li>
                        </ul>
                    </li>
					<li class="xn-openable <?php echo ($activePage == "view_Instructor" ? "active" : ""); ?> <?php echo ($activePage == "add_Instructor" ? "active" : ""); ?>" >
                        <a href="#"><span class="fa fa-plus"></span> <span class="xn-text"> All about Instructor</span></a>

                        <ul>
                            <li class="<?php echo ($activePage == "view_Instructor" ? "active" : ""); ?>"><a href="view_Instructor.php"><span class="fa fa-list"></span> List of Instructor</a></li>
                            <li class="<?php echo ($activePage == "add_Instructor" ? "active" : ""); ?>"><a href="add_Instructor.php"><span class="fa fa-plus"></span> Add Instructor</a></li>
                        </ul>
                    </li>
              <!--
                    <li>
                        <a href="change_pass.php"><span class="fa fa-files-o"></span> <span class="xn-text"> Change Password </span></a>
                    </li>
-->



                </ul>
                <!-- END X-NAVIGATION -->
            </div>