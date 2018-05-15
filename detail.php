<?php 

include("admin/connect.php"); 
session_start();
$cid=$_REQUEST['cid'];
//$res=mysql_query("SELECT * FROM tblcourse Where CourseID = '".$_REQUEST['cid']."'");
// (SELECT GROUP_CONCAT(EmailAddress SEPARATOR ',') FROM tbluser WHERE RoleId = et.Cc && ISActive = 1) AS totalcc
$res=mysql_query("SELECT c.* FROM tblcourse as c Where CourseID = '".$_REQUEST['cid']."'");
//$res=mysql_query("SELECT c.*,i.InsName as Instructor FROM tblcourse as c  INNER JOIN tblmstinstructor as i ON c.InsId=i.InsId where c.CourseID='".$_REQUEST['cid']."'");
$data=mysql_fetch_array($res);
if($data['InsId']!=NULL)
{
	$ins = mysql_query("SELECT GROUP_CONCAT(InsName SEPARATOR ',')  AS Instructor FROM tblmstinstructor WHERE InsId IN (".$data['InsId'].")");
$insres=mysql_fetch_array($ins);
}




$emailpass=$_SESSION['Email'];
//print_r($data);


$instructordata=mysql_query("SELECT tblcourse.CourseID,tblcourse.InsId, tblmstinstructor.InsName, tblmstinstructor.InsImg,tblmstinstructor.About FROM tblcourse INNER JOIN tblmstinstructor ON tblcourse.InsId=tblmstinstructor.InsId where tblcourse.CourseID='".$_REQUEST['cid']."'");

$datainstructor=mysql_fetch_array($instructordata);
	//$getIns=explode(',',$datainstructor['InsId']);
	$getIns=$datainstructor['InsId'];
   $selectId=mysql_query("select * from tblmstinstructor where InsId  IN (".$getIns.")");
  
		
		//exit;

?>

<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>All-Institute | Course detail</title>
<link rel="apple-touch-icon" href="image/favicon-apple.png">
<link rel="icon" href="image/favicon.png">
<link rel="pingback" href="http://tritraining.edu.au/xmlrpc.php">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link type="text/css" media="screen" rel="stylesheet" href="css/awwwards.css" />
<link type="text/css" media="screen" rel="stylesheet" href="css/fastfonts.css" />


<link rel="stylesheet" href="css_new/all_ins.css">	
	 <!-- Normalize CSS -->
    <link rel="stylesheet" href="css_new/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css_new/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css_new/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css_new/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="css_new/font-awesome.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="css_new/meanmenu.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" />
    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="css_new/jquery.datetimepicker.css">
    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="css_new/magnific-popup.css">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="css_new/hover-min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css_new/style.css">
    <!-- Modernizr Js -->
    <script src="js_new/modernizr-2.8.3.min.js"></script>

<style>

h3.sidebar-title {
  font-size: 22px;
  color: #002147;
  text-transform: capitalize;
  margin-bottom: 35px;
  position: relative;
  font-weight: 500;
  text-align:left;
  
}
.title-default-left {
    text-transform: capitalize;
    text-align: left;
    font-weight: 700;
	font-size:28px;
    margin-bottom: 45px;
    color: #002147;
}
.course-details-inner .course-details-tab-area ul.course-details-tab-btn > li a 
{
	 font-weight: 700;
}
.related-courses-title-area h3 
{
 
  text-align:left;
  font-size:22px;
  font-weight: 700;
}
.owl-nav
{
   padding-top:15px;
}
.enroll-btn {
  color: #002147;
  padding: 18px 0;
  background: #ffffff;
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 700;
  display: inline-block;
  border: #C4161C;
  width: 100%;
  border: 2px solid #C4161C;
  text-align: center;
  -webkit-transition: all 0.5s ease-out;
  -moz-transition: all 0.5s ease-out;
  -ms-transition: all 0.5s ease-out;
  -o-transition: all 0.5s ease-out;
  transition: all 0.5s ease-out;
}
.enroll-btn:hover {
  background-color:#C4161C;
  color: #ffffff !important;
}
h3.sidebar-title:before {
  content: "";
  height: 3px;
  width: 40px;
  position: absolute;
  left: 0;
  bottom: -15px;
  z-index: 1;
  background: #C4161C !important;
}
.courses-box1 .single-item-wrapper .courses-img-wrapper:before
{
	background-color: rgba(250, 0, 0, 0.8) !important;	
}

ol, ul {
	padding: 0;
	list-style-type: none;
	text-align: left !important;
}
#accordion .panel-default .panel-heading a {
    outline: none;
    display: block;
    padding: 1px !important;
    text-align: center;
}
.curriculum-wrapper .panel-default .panel-heading .panel-title a ul li:nth-child(3n) {
    font-size: 16px;
    color: #002147;
    font-weight: 700;
}
dl, menu, ol, ul {
  
}
h4
{
    font-family: 'Roboto', sans-serif;
    line-height: 1.5 !important;
    font-weight: 300 !important;
    margin: 0 0 20px 0;
    color: #212121;
}
h3
{
text-align:left !important;
    font-family: 'Roboto', sans-serif;
    line-height: 1.5;
    font-weight: 600 !important;
   
    color: #212121;
}
.courses-box1 .single-item-wrapper .courses-img-wrapper a
{
	height:70px !important;
	width:70px !important;
}

</style>

        
<style type="text/css">
img.wp-smiley, img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
.btn-t{
	margin-top:10px;
}
a:hover, a:visited:hover {
    text-decoration: none;
    color: #ffffff;
}
.areview
{
  margin-top:8px !important;
}
.courses-box1 .single-item-wrapper .courses-content-wrapper .item-title a:hover
{
	 color: #C4161C !important;
}
.courses-box1 .single-item-wrapper .courses-content-wrapper .courses-info li
{
	padding-right: 10px !important;
}
.courses-box1 .single-item-wrapper .courses-content-wrapper
 {
    padding: 0px 5px !important;
}

.courses-box1 .single-item-wrapper
{
	width:100% !important;
}

.courses-page-area5 
{
    padding: 10px 0 70px !important;
}
.courses-page-area5 
{
    padding: 30px 0 70px !important;
}

h3.sidebar-title
{
	font-size: 16px !important;

}
.sidebar-title2{font-size:16px;text-transform:none;}

.skilled-lecturers-img img{width: 100px; text-align: center; position: relative; margin: auto;}

.skilled-lecturers-content h4{margin-top:40px;}

.skilled-lecturers-details a{margin-top:30px;}

.noinstructor{background: #ccc;color: #000;font-size: 20px;text-align: center;padding: 50px 20px;}

.sidtop{margin-top:-30px;}
/*ul 
{
    margin: 1em 0px !important;
}*/

.hentry header, .homepage-article header, .blog-article header {
    padding: 0em 0em !important;
}
</style>

        <link rel='stylesheet' id='ajax-load-more-css'  href='css/ajax-load-more.css' type='text/css' media='all' />
        <link rel='stylesheet' id='rs-plugin-settings-css'  href='css/settings.css' type='text/css' media='all' />
        <style id='rs-plugin-settings-inline-css' type='text/css'>
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.hentry header, .homepage-article header, .blog-article header
 {
     padding-top: 0  !important;
    margin-top:0px;	 
}
.none{display:none !important;}

.smallfonts li
{
	font-size:12px!important;
}

						.btn-danger {
    color: #fff;
    background-color: #c00808!important;
    border-color: #c00808!important;
}
.btn-danger:hover {
    color: #fff;
    background-color: #333!important;
    border-color: #333!important;
}

.courses-content-wrapper ul {
	margin: 1em 0px !important;
}
.single-detail{float:left;}
						
</style>
        <link rel='stylesheet' id='cpsh-shortcodes-css'  href='css/shortcodes.css' type='text/css' media='all' />
        <link rel='stylesheet' id='bones-boot-css'  href='css/bootstrap.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='bones-magnafic-css'  href='css/magnific-popup.css' type='text/css' media='all' />
        <link rel='stylesheet' id='bones-animate-css'  href='css/animate.css' type='text/css' media='all' />
        <link rel='stylesheet' id='bones-stylesheet-css'  href='css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' id='bones-icons-css'  href='css/icons.css' type='text/css' media='all' />
        <link rel='stylesheet' id='googleFonts-css'  href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' type='text/css' media='all' />
        </head>

        <body class="home page page-id-2 page-template page-template-page-home single single-team page-template-page-home-php desktop">
<div id="container">
          <div id="custom-content-popup" class="white-popup mfp-hide"> </div>
         <header id="header_new">
			<div class="container">
				<div class="row">
					<!-- Logo -->
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="logo post_animation3"> <a id="logo" href="index.php" rel="nofollow"><img src="image/logo.png" ></a> </div>
					</div>
					<!-- End Logo -->

					<!-- Navigation -->
					<div class="col-md-9 col-sm-9 col-xs-9">
						<div class="center align-right pull-right"><a href="http://www.aerexperts.com/" target="_blank" class="aere-button">Visit AERE</a> </div>
						<div class="clearfix"></div>
						<nav>
							<div role="navigation" class="navbar navigation post_animation3">
								<div class="navbar-header">
									<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
									<div class="navbar-collapse collapse">
										<ul class="nav navbar-nav">
											<li id="menu-item-75" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-75"><a href="index.php">Home</a>
											</li>

											<li id="menu-item-126" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-126"><a href="allcourses.php">Courses</a>
											</li>
											<li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-125"><a href="index.php#footer">Contact</a>
											</li>
										</ul>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</nav>
					</div>
					<!-- End Navigation -->
					<div class="clearfix"></div>
				</div>
			</div>
		</header>
          <div id="content">
    <div id="inner-content" class="cf">
              <div id="main" class="m-all t-all d-all cf" role="main">
        <!--<div class="section-white page-slider home-page-slider hom inner_banner_height">
                  <div class="parallax1" > </div>
                </div>-->
	  <div class="section-white section-one">
								<article class="cf wrap post-410 team type-team status-publish has-post-thumbnail hentry profile-category-manager" role="article">
								<br>

									<header class="article-header wow fadeInUp">
										<h1 class="page-title">Course Detail</h1>
									</header>

									
			</div>						
								
									
        <div class="courses-page-area5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
					
					<?php
						
						if($data['CourseID']=='')
						{
							?>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 all">
                        
                            <div class="single-item-wrapper single-detail">
                            	<div class="nocourse">
                                    <center class="nocourse2">   No Course are available.</center>
									</div>
                                
                            </div>
                       
                    </div> 
					<br><br><br><br><br><br><br><br><br>
					<?php
						}
						else
						{
					?>					
					
                        <div class="course-details-inner">
                            <h3 class="title-default-left title-bar-high"><?php echo $data['Title'];?></h3>
                           
							
                            <img src="admin/upload/<?php echo $data['Image'];?>" class="img-responsive" alt="course">
                            <div class="course-details-tab-area">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <ul class="course-details-tab-btn">
                                            <li class="active"><a href="#description" data-toggle="tab" aria-expanded="false">Description</a></li>
                                            
							<?php

								if($selectId>0)
								{	
							?>
										<li><a href="#lecturer" data-toggle="tab" aria-expanded="false" style="text-transform:none;">Instructor(s)</a></li>
							<?php		
								}
								else
								{
									
								}
							?>
											
											
                                            
                                         <!--   <li><a href="#reviews" data-toggle="tab" aria-expanded="false">Reviews</a></li>  -->
                                        </ul>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
									
                                        <div class="tab-content">
                                             <div class="tab-pane fade active in" id="description">
                                                <h3 class="sidebar-title">Course Description</h3>
                                                
												 <p style="text-align:justify"><?php if($data['Summary']!='')
												 {
													 echo $data['Summary'];
													 } else{echo  "Not Available";}?></p>
													 	<div class="row">
												<div class="col-lg-6 col-md-6">
													<h3 class="sidebar-title sidebar-title2">Start Date and Time</h3>
													
													<p><?php
													if($data['StartDate']!='')
												 {
														 //  echo $data['StartDate'];
														 
									   $endDate = date('m/d/Y', strtotime($data['StartDate']));  
									   
									   echo  $endDate;
												 }else{echo "Not Available";}
													?>&nbsp;/&nbsp;
													<?php if($data['StartTime']!='')
												 {
													echo $data['StartTime'];
												 }else{echo "Not Available";}
													?>
													
													</p>
													<h3 class="sidebar-title sidebar-title2">Location</h3>
													<p><?php if($data['Location']!='')
												 { echo $data['Location'];}else{echo  "Not Available";}?></p>
													<h3 class="sidebar-title sidebar-title2">Intended Audience</h3>
													<p><?php  if($data['IntendedAudience']!=''){ echo $data['IntendedAudience'];}else{echo  "Not Available";}?></p>
													
												</div>
												
												<div class="col-lg-6 col-md-6">
													<h3 class="sidebar-title sidebar-title2">Instructor(s)</h3>
													<p><?php if($insres['Instructor']!=''){ echo $insres['Instructor'];}else{echo  "Not Available";}?></p>
													<h3 class="sidebar-title sidebar-title2">Discussant/Moderator(s)</h3>
													<p><?php  if($data['Instigator']!=''){echo $data['Instigator'];}else{echo  " Not Available";}?></p>
													<h3 class="sidebar-title sidebar-title2">Total Available Seats</h3>
													<p>
													<div id="num"></div>
													<script>
												    
													var num = <?php echo $data['TotalCapacity'] - $data['NoofUserRegistered']; ?>;
													
													if(num==0)
													{
													   num="Not Available";
														
													}
													document.getElementById('num').innerHTML = num;
													
													
													</script>
													<?php 
													// $noofuserreg=$data['NoofUserRegistered'];	
															// $totcap=$data['TotalCapacity'];
															// $setave=$totcap-$noofuserreg	; 
															// if($setave!=''){ echo $setave;}else{echo  "Not Available";}
															?>
													
															</p>
																									
                                                </div>
												</div>
                                            </div>
											
                                         
										 
										 
	<!--  Lecturer Code start    -->									 
	
										 
                                            <div class="tab-pane fade" id="lecturer">
                                                <div class="course-details-skilled-lecturers">
			<?php
			
   
   if($selectId>0)
   {
			while($datainstructor1=mysql_fetch_array($selectId))
			{
	?>									<br>
                                                    <ul>
                                                        <li>
                                                            <div class="skilled-lecturers-img col-md-3 col-sm-4 col-xs-4">
                                                                <a href="instructor.php?InsId=<?php echo $datainstructor1['InsId']; ?>"><img src="admin/instructor/<?php  echo $datainstructor1['InsImg'];?>" class="img-responsive" alt="skilled"></a>
                                                            </div>
                                                            <div class="skilled-lecturers-content col-md-6 col-sm-8 col-xs-8">
                                                                <h4><a href="instructor.php?InsId=<?php echo $datainstructor1['InsId']; ?>"><?php  echo $datainstructor1['InsName'];?></a></h4>
                                                               
                                                            </div>
                                                            
                                                            <div class="skilled-lecturers-details col-md-3 col-sm-4 col-xs-4">
                                                        <a href="instructor.php?InsId=<?php echo $datainstructor1['InsId']; ?>" target="_blank" class="details-accent-btn btn-t">Details</a>
                                                            </div>
                                                        </li>
														
                                                        
                                                    </ul>
			<?php
			}
    }
	else
		
		{
			?>
			<div class="noinstructor">
				No Instructor are available.
			</div>
			<?php
		}
			?>			
													
                                                </div>
                                            </div>
	
	<!--  Lecturer Code End    -->
											
											
                                         <!--   <div class="tab-pane fade" id="reviews">
                                                <div class="course-details-comments">
                                                    <h3 class="sidebar-title">Student Reviews</h3>
                                                    <div class="media">
                                                        <a href="#" class="pull-left areview">
                                                            <img alt="Comments" src="img_new/course/16.jpg" class="media-object areview">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3><a href="#">Greg Christman</a></h3>
                                                            <h4>Excellent course!</h4>
                                                            <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletog and typesetting industry. Lorem </p>
                                                            <div class="replay-area">
                                                                <ul>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a href="#" class="pull-left areview">
                                                            <img alt="Comments" src="img_new/course/17.jpg" class="media-object areview">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3><a href="#">Lora Ekram</a></h3>
                                                            <h4>Excellent course!</h4>
                                                            <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletog and typesetting industry. Lorem </p>
                                                            <div class="replay-area">
                                                                <ul>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a href="#" class="pull-left areview">
                                                            <img alt="Comments" src="img_new/course/18.jpg" class="media-object areview">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3><a href="#">Mike Jones</a></h3>
                                                            <h4>Excellent course!</h4>
                                                            <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletog and typesetting industry. Lorem </p>
                                                            <div class="replay-area">
                                                                <ul>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a href="#" class="pull-left areview">
                                                            <img alt="Comments" src="img_new/course/16.jpg" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3><a href="#">Greg Christman</a></h3>
                                                            <h4>Excellent course!</h4>
                                                            <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletog and typesetting industry. Lorem </p>
                                                            <div class="replay-area">
                                                                <ul>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="leave-comments">
                                                    <h3 class="sidebar-title">Leave A Comment</h3>
                                                    <div class="row">
                                                        <div class="contact-form" id="review-form">
                                                            <form>
                                                                <fieldset>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <input type="text" placeholder="Name" class="form-control">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <input type="email" placeholder="Email" class="form-control">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <div class="rate-wrapper">
                                                                                <div class="rate-label">Your Rating:</div>
                                                                                <div class="rate">
                                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <textarea placeholder="Comment" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <button type="submit" class="view-all-accent-btn">Post Comment</button>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>-->
											
											
											
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php
						}
						?>
						
						
                        <div class="related-courses-title-area">
                            <h3>Related Courses</h3>
                        </div>
                        <div id="shadow-carousel" class="related-courses-carousel">
                            <div class="rc-carousel" data-loop="true" data-items="3" data-margin="15" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">
							
							<?php
							$date=date('Y-m-d');											
							$cnd=" AND StartDate > '$date' ";
							
							$cnd2= " AND '$date' BETWEEN  StartDate AND EndDate ";
											
			              $res=mysql_query("SELECT * FROM tblcourse Where CourseID!='$cid' and IsStatus = 1 AND (StartDate > '$date' OR '$date' BETWEEN  StartDate AND EndDate) order by StartDate ");
							$noofrec=mysql_num_rows($res);
							if($noofrec>0)
							{	
								while($data1=mysql_fetch_array($res))
								{
//print_r($data);
?>
                                <div class="courses-box1">
                                    <div class="single-item-wrapper">
                                       	<div class="courses-img-wrapper hvr-bounce-to-bottom">
								  
                                    <img src="admin/upload/<?php echo $data1['Image'];?>" class="wrapperimg" 
									alt="">
									
									<div class="wrapperdiv">
                                     <h class="wrapperh">
									 <center class="wrapperi"></center> </h>
									</div>
						<div class="wrapperj">
								<?php //echo $data['Title'];?>
						</div>
									<a href="detail.php?cid=<?php echo $data1['CourseID'];?>"><i class="logo" aria-hidden="true"></i>
										<div class="wrapperk">Click for</div>
										<div class="wrapperl">detail</div>
									</a>
										
                                </div>
                                        <div class="courses-content-wrapper">
                                            
                                    <ul class="courses-info">
									   
                                       <li>
											
                                           
											<?php echo $data1['Title'];?><br>
											
											</li>
                                       
										</ul>
										   
                                            <ul class="courses-info smallfonts">
												<li><?php //echo $data1['StartDate'];
												 $endDate = date('m/d/Y', strtotime($data1['StartDate']));  
									   
												 echo  $endDate;
												
												?>
                                                    <br><span><b> Start Date</b></span></li>
                                                <li><?php echo $data1['TotalCapacity']; ?>
                                                    <br><span><b>Seat</b></span></li>
										<li><?php echo $data1['Time']; ?>
                                                    <br><span><b> Time</b></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                               
                        <?php
							}
						}else
						{?>
					
                            <div class="single-item-wrapper">
                            	<div class="nocourse" >
                                    <center class="nocourse2">   No Course Available..</center>
									</div>
                                
                            </div>
                      
                    
                        <?php 
						}
						?>						
							   
							   
                            </div>
                        </div>
						
						
                    </div>
					 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                       	<?php include("admin/connect.php"); 
						
$res=mysql_query("SELECT * FROM tblcourse Where CourseID = '".$_REQUEST['cid']."'");
$data=mysql_fetch_array($res);
$ccid=$data['CourseID'];
//print_r($data);

?>
					<?php
						if($data['CourseID']=='' )
						{
								//echo "hiiiiiii";
						}
						else
						{
					?>					
						<div class="sidebar" style=" margin:0px 0px 10px 0px">
                            <div class="sidebar-box" >
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Course Fees</h3>
                                    <div class="sidebar-course-price">
                                        <p><?php if($data['CourseFees']!='')
								   {	echo "$";
									    echo $data['CourseFees']; } 
									else{ echo  " Not Available"; }
							   ?></p>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
					<?php
						}
					?>
	<?php
		$date=date('Y-m-d');
		$cnd=" and (EndDate < '$date' ) ";
		$res=mysql_query("SELECT * FROM tblcourse Where CourseID='$ccid' and IsStatus = 1 $cnd");
		$data2=mysql_fetch_array($res);
		//echo $video1=$data['Video'];
		$noofrec=mysql_num_rows($res);
		if($noofrec>0)
		{
	?>
						<br>
						<div class="sidebar" style="margin:0px 0px 10px 0px">
                            <div class="sidebar-box" >
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Course video</h3>
                                   <?php 
								   if($data2['Video']!='')
								   {
									 ?>
									 <a href="https://www.youtube.com/watch?v='.'$data2['Video']'">
									  <div class="youtube-popup">
                                       <iframe width="100%" height="150" src="<?php echo 'http://www.youtube.com/embed/'.$data2['Video'];?>" frameborder="0" allowfullscreen></iframe>
									   <div>
									</a>	   
									   </div>
									</div>
									<?php 
								   }
								   else
								   {
									   echo  " Not Available";
								   }
								   ?>
                                      <?php //echo $data['Video']; ?>
                                         
									
										<script>
											$('.youtube-popup > div').click(function()
											{
												window.open($(this).parent().children('iframe').attr("src"));
											});
										</script>
                                </div>
                            </div>
                        </div>
		<?php
		}
		?>
					
						
				
 <?php
	

	
	
	$select1=mysql_query("select * from tblregister where Email='$emailpass'");
	$result1=mysql_fetch_array($select1);
	$query=mysql_num_rows($select1);
	 $isactive=$result1['IsActive'];
	 $regid=$result1['RegisterId'];
	  $fnm=$result1['FirstName'];
	  $em=$result1['Email'];
	 $pno=$result1['Phone'];
	 $lnm=$result1['LastName'];
    $add=$result1['Address'];

	 $cid=$_REQUEST['cid'];
	 
	if($query>0)
	{ 
	
		
		if($isactive=="1")
		{
		?>
			
				<div class="alert alert-success" id="succes_login_id" style=" margin:0px 0px 10px 0px">
					<strong>You are login successfully.</strong> <?php echo $emailpass ?>
				</div>
				<script>
setTimeout(function() {
  $('#succes_login_id').fadeOut('hide');
}, 10000);
					
				</script>
			
			
				<div class="sidebar-box">
                    <div class="sidebar-box-inner">	
						<a href="logout.php"><button type="submit" class="btn btn-danger btn-block" name="signinbtn">Logout</button></a>
					</div>
				</div>
						
		
					
		<?php
								   
				$selcourse=mysql_query("select * from tblcourse where CourseID='$cid'");
				$res1=mysql_fetch_array($selcourse);
				$cid=$res1['CourseID'];
				$totseat=$res1['TotalCapacity'];
				$noofseat=$res1['NoofUserRegistered'];
				$date1=date('Y-m-d');
				$edate =$res1['EndDate'];

				
				if(isset($_POST['enroll']))
				{
					$enr=mysql_query("select * from tblcourseregistered where CourseID='$cid' && RegisterId='$regid' ");
					$enrol=mysql_fetch_array($enr);
					$reid=$enrol['$RegisterId'];
					$cid=$enrol['$CourseID'];
					
					$date=date('Y-m-d');
					 $cnd=" and (EndDate < '$date' ) ";
					 $res=mysql_query("SELECT * FROM tblcourse Where CourseID='$cid' $cnd order by StartDate");

					 $rec=mysql_num_rows($res);
					
					if($edate < $date1 &&  $rec>0)
					{	
					?>
                         <div class="alert alert-danger" style="margin:0px 0px 10px 0px">
				              <strong>Deadline is closed</strong>
				         </div>	
					
					<?php	
					}
					else if($enrol!=0)
					{
					?>
					    <div class="alert alert-danger" style=" margin:0px 0px 10px 0px">
				              <strong>You are already registered in this course.</strong>
				         </div>
						
					
					<?php
					}
					else if($noofseat>=$totseat)
					{
					?>
                    <div class="alert alert-danger" style="margin:0px 0px 10px 0px">
				               <strong>Registration is closed</strong>
				         </div>
													
					<?php	
					}

					else
					{
					
						$isactive=$result1['IsActive'];
						$regid=$result1['RegisterId'];
						$cid=$_REQUEST['cid'];
						$ins=mysql_query("insert into tblcourseregistered(RegisterId,CourseID,IsActive) values('$regid','$cid','$isactive')");
						$noofseat2=$noofseat+1;
						$upd=mysql_query("update tblcourse set NoofUserRegistered='$noofseat2' where CourseID='$cid'");
						//var_dump($res1);
						//exit();
						if($upd)
						{
									$cid=$data['CourseID'];
									$tit=$data['Title'];
									$Instructor=$data['Instructor'];
									$Instigator=$data['Instigator'];
									$StartDate=$data['StartDate'];
									$Location=$data['Location'];
									$Time=$data['Time'];
									$IntendedAudience=$data['IntendedAudience'];
									$MeetingType=$data['MeetingType'];
									$CourseFees=$data['CourseFees'];
								
									
									require_once('email/class.phpmailer.php');
									$mail = new PHPMailer(); // create a new object
									$mail->IsSMTP(); // enable SMTP
									$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
									$mail->SMTPAuth = true; // authentication enabled
									$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
									$mail->Host = "smtp.gmail.com";
									$mail->Port = 465; // or 587
									$mail->IsHTML(true);
									$mail->FromName="AERE"; 
									$mail->Username = "myopeneyes3937@gmail.com";
									$mail->Password = "W3lc0m3@2018";
									$mail->SetFrom("myopeneyes3937@gmail.com");
								//	$mail->AddEmbeddedImage('emailimage/logo.png','logoimg','logo.jpg');
									$mail->Subject = "AERE Cource $tit";
									$mail->Body =  "<img src='http://aerexperts.com/image/logo.png' height='80px'   width='180px'> <br><br><br>
									Dear <b>$fnm,<b><br><br>
							
									Thank you for your interest in the course $tit.We have received your 
									registration with the following detail:<br><br>
										
									<b>First name</b> : $fnm<br>
									<b>Last name</b> : $lnm<br>
									<b>Email address</b> : $em<br>
									<b>Address</b> : $add<br>
									<b>Phone number</b> : $pno<br>
									<br><br>
									Here is the course detail again:<br><br>
									
									<b>Instructors</b> : $Instructor<br>
									<b>Instigator</b> : $Instigato<br>
									<b>Date </b> : $StartDate <br>
									<b>Location </b> : $Location<br>
									<b>Venue </b> : $Venue<br>
									<b>Time </b> : $Time<br>
									<b>Intended Audience</b> : $IntendedAudience<br>
									<b>Meeting Type</b> : $MeetingType<br>
									<b>Fees</b> : $$CourseFees<br><br>
									
									If you need to make any changes to this, please do not hesitate to 
									contact us at Manny@AERExperts.com or simply reply and someone will get back
									 to you soon.<br><br>
									
									 <b>Thank you,</b><br>
									<b>AERE Team</b>";
									$mail->AddAddress($emailpass);
								
									if(!$mail->Send())
									{
										echo "Mailer Error: " . $mail->ErrorInfo;
									}
									else
									{
										
										
									require_once('email/class.phpmailer.php');
									$mail = new PHPMailer(); // create a new object
									$mail->IsSMTP(); // enable SMTP
									$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
									$mail->SMTPAuth = true; // authentication enabled
									$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
									$mail->Host = "smtp.gmail.com";
									$mail->Port = 465; // or 587
									$mail->IsHTML(true);
									$mail->FromName="AERE"; 
									$mail->Username = "myopeneyes3937@gmail.com";
									$mail->Password = "W3lc0m3@2018";
									$mail->SetFrom("myopeneyes3937@gmail.com");
									
									$mail->Subject = "New registration for course $tit";
									$mail->Body = "<img src='http://aerexperts.com/image/logo.png' height='80px' width='180px'> <br><br><br>
									Hey Team, <br/><br>
										
									Someone just registered to take the course : <b>$tit</b><br><br>
									
									<b>First name</b> : $fnm<br>
									<b>Last name</b> : $lnm<br>
									<b>Email address</b> : $em<br>
									<b>Address</b> : $add<br>
									<b>Phone number</b> : $pno<br>
									<br/><br/>
										
										
									<b>Thank You,</b><br/>
									<b>Your web team </b><br/>";
									$mail->AddAddress('myopeneyes3937@gmail.com');
									if(!$mail->Send())
									{
										echo "Mailer Error: " . $mail->ErrorInfo;
									}
									else
									{
										?>
								   <div class="alert alert-success" style="margin:0px 0px 10px 0px">
				                	    <strong> Thank you for registering for this course.</strong>
								   </div>
										
									<script>
										document.getElementById('num').innerHTML = +document.getElementById('num').innerHTML - 1;
									</script>
							<?php
										
									}
										
										
										
									}												
						}
					}
																									
				}			 
				?>          
						 <?php 
									 // $date=date('Y-m-d');
									 // $cnd=" and (EndDate < '$date' ) ";
									 // $res=mysql_query("SELECT * FROM tblcourse Where CourseID='$cid' $cnd order by StartDate");
		
									 // $rec=mysql_num_rows($res);
									
									
									$enr=mysql_query("select * from tblcourseregistered where CourseID='$cid' && RegisterId='$regid' ");			
									$enrol=mysql_fetch_array($enr);
									
									?>
						 <?php if($enrol!=0 or $noofseat>=$totseat){?>  
						<!--	<div class="alert alert-danger" id="deadline_close_id" style="width:262px; margin:0px 0px 10px 0px">
				              <strong>Deadline is closed</strong>
				         </div>	-->
				<script>
setTimeout(function() {
  $('#deadline_close_id').fadeOut('hide');
}, 10000);
					
				</script>
						 <?php }?>
						 
						<form method="post">
							<div class="sidebar-box">
								<div class="sidebar-box-inner">	
									<input type="submit" onclick="return confirm('Are you sure enroll for this course?')" 
									<?php if(($enrol!=0 or $noofseat>=$totseat) or $rec > 0){?> disabled <?php }?>  class="btn btn-danger btn-block" value="Enrollment" name="enroll">	
								 </div>
							</div>
						</form>	
		<?php		
		}
		else 
		{
		?>
						
						
					 <div class="sidebar">
		                    <div class="sidebar-box">
                                <div class="sidebar-box-inner">	
				
								 <h3 class="sidebar-title">Sign In Enroll</h3>
                                    <div class="sidebar-course-price">
                                        
                                        <a href="registration2.php?cid=<?php echo $_REQUEST['cid'];?>">
										<button type="submit" class="btn btn-danger btn-block">Sign In</button></a>
                                        
                                    </div>
								</div>
							</div>	
		                </div>
				<?php
		}	
	}
	//echo '<pre>'; echo print_r($data); 
	if($data['CourseID'] && $isactive!="1")
	{
		?>
		<br>
		 <div class="sidebar">
		                    <div class="sidebar-box sidtop">
                                <div class="sidebar-box-inner">	
				
								 <h3 class="sidebar-title">Sign In Enroll</h3>
                                    <div class="sidebar-course-price">
                                        
                                        <a href="registration2.php?cid=<?php echo $_REQUEST['cid'];?>">
										<button type="submit" class="btn btn-danger btn-block">Sign In</button></a>
                                        
                                    </div>
								</div>
							</div>	
		                </div>
						<?php
	}
	
	?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses Page 5 Area End Here -->
        <!-- Footer Area Start Here -->
       
        <!-- Footer Area End Here -->
    </div>
									
									
									
	  
  </div>
	<?php
		
			include('footer2.php');
			
		?>
        </div>
		

<link rel='stylesheet' id='gforms_reset_css-css'  href='css/formreset.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_formsmain_css-css'  href='css/formsmain.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_ready_class_css-css'  href='css/readyclass.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_browsers_css-css'  href='css/browsers.min.css' type='text/css' media='all' />

<script type='text/javascript'  src="js/jquery-2.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script> 
 <script type="text/javascript">


$('#mega-menu ul li a').on('click',function(){
   $('.menu-main').addClass('none');
   $('.mobile-nav').addClass('menu-open1');
   $('.menu-main').removeClass('menu-open');
});

$('#mobile-nav-button').on('click',function(){
   $('.menu-main').addClass('menu-open');
   $('.menu-main').removeClass('none');
});


</script>
<script type='text/javascript' src='js/magnific-popup.js'></script> 
<script type='text/javascript' src='js/wow.min.js'></script> 
<script type='text/javascript' src='js/scripts.min.js'></script> 
<script type='text/javascript' src='js/jquery.sticky-kit.js'></script> 
<script>
$(".about-the-quickfacts").stick_in_parent({
    offset_top: 70
});

</script>

<!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- jquery-->
    <script src="js_new/jquery-2.2.4.min.js" type="text/javascript"></script>
    

    <!-- Plugins js -->
    <script src="js_new/plugins.js" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="js_new/bootstrap.min.js" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="js_new/wow.min.js"></script>
    <!-- Nivo slider js -->
    <script src="vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="vendor/slider/home.js" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="js_new/jquery.meanmenu.min.js" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="js_new/jquery.scrollUp.min.js" type="text/javascript"></script>
    <!-- jquery.counterup js -->
    <script src="js_new/jquery.counterup.min.js"></script>
    <script src="js_new/waypoints.min.js"></script>
    <!-- Countdown js -->
    <script src="js_new/jquery.countdown.min.js" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="js_new/isotope.pkgd.min.js" type="text/javascript"></script>
    <!-- Select2 Js -->
    <script src="js_new/select2.min.js" type="text/javascript"></script>
    <!-- Nouislider Js -->
    <script src="vendor/noUiSlider/nouislider.min.js" type="text/javascript"></script>
    <!-- Validator js -->
    <script src="js_new/validator.min.js" type="text/javascript"></script>
    <!-- Magic Popup js -->
    <script src="js_new/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <!-- Custom Js -->
<script src="js_new/main.js" type="text/javascript"></script> 
 


</body>
</html>