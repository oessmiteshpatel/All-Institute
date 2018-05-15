<!doctype html>

        <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <title>AERE | Assessment Services</title>
        <link rel="apple-touch-icon" href="image/favicon-apple.png">
        <link rel="icon" href="image/favicon.png">
        <link rel="pingback" href="http://tritraining.edu.au/xmlrpc.php">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" media="screen" rel="stylesheet" href="css/awwwards.css" />
        <link type="text/css" media="screen" rel="stylesheet" href="css/fastfonts.css" />
        
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
.none{display:none !important;}
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
          <header class="header " role="banner">
    <div id="inner-header" class="wrap cf"> <a id="logo" href="index.html" rel="nofollow"><img src="image/logo.png" ></a>
              <div class="mobile-nav mobile-nav-collapsed "><a id="mobile-nav-button" href="javascript:void(0);"><span></span><span></span><span></span><!-- <div class="icon icon-list-1"></div> --></a></div>
            </div>
    <div id="mega-menu" class="">
              <nav role="navigation">
        <ul id="menu-main" class="nav top-nav cf">
                  <li id="menu-item-75" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-75"><a href="index.html">Home</a></li>
                  <li id="menu-item-75" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-75"><a href="index.html#home-to-scroll">About</a></li>
                  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.html#section-blue" >Services</a></li>
				  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.html#presentations">Presentations</a></li>
				  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.html#page">One Pagers</a></li>
				  <li id="menu-item-89" class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-89"><a href="index.html#staff" >Staff</a></li>
                  <li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-125"><a href="index.html#footer">Contact</a></li>
				 <li id="menu-item-126" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-126"><a href="AllInst.html" class="active">ALL-Institute</a></li>
                </ul>
      </nav>
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

									<header class="article-header wow fadeInUp">
										<h1 class="page-title">All Courses</h1>
									</header>

									<section class="entry-content cf">
										<div class="m-all t-all d-all">
											<h5 class="push-color text-left"><a href='upcoming.php'>Upcoming</a> | <a href='featured.php'>Fetured</a> | <a href='finished.php'>Finished</a></h5>
											<table width="100%" border='1'>
											<tr><th>Title</th><th>Start Date</th><th>End Date</th><th>Location</th><th>Time</th><th>Fees</th><th>&nbsp;</th></tr> 
											<?php
												include("admin/connect.php");
												$date=date('Y-m-d');
												$res=mysql_query("SELECT * FROM tblcourse");
												
												
												 
												while($data=mysql_fetch_array($res))
												{
												 
												echo "<tr>";    echo "<td>".$data['Title']."</td>";
												 
												
												 
												echo "<td>".$data['StartDate']."</td>";
												 
												echo "<td>".$data['EndDate']."</td>";
												 
												echo "<td>".$data['Location']."</td>";
												 
												echo "<td>".$data['Time']."</td>";
												echo "<td>".$data['CourseFees']."</td>";
												 
												echo "<td><a href='registration.php?cid=".$data['CourseID']."'>View</a></td>";
												 
												echo "</tr>";    
												 
												}
												 
												
												
												 
												// receive  value(value sent  using query string )

											?>
											</table>;	
										</div>										
										
									</section>

								</article>
							</div>
							
 
	  
  </div>
          <footer class="footer"  id="footer" role="contentinfo">
    <div id="inner-footer" class="wrap cf">
              <div class="m-all t-all d-3of4"> 
        <!--<div class="source-org copyright cf"><span>&copy; 2015. All Rights Reserved. </span>
                  <ul id="menu-terms" class="terms-nav terms-links">
            <li id="menu-item-484" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-484"><a href="http://elearning.tritraining.com.au" onclick="__gaTracker('send', 'event', 'outbound-widget', 'http://elearning.tritraining.com.au', 'eLearning Login');">eLearning Login</a></li>
            <li id="menu-item-471" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-471"><a href="terms-and-conditions/index.html">*^Terms and Conditions</a></li>
            <li id="menu-item-521" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-521"><a href="policies-and-procedures/index.html">Policies and Procedures</a></li>
            <li id="menu-item-474" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-474"><a href="audit-information/index.html">Audit Info &#038; Partnering Agencies</a></li>
          </ul>
                </div>-->
        
        <nav role="navigation" class="hom">
                  <ul id="menu-footer" class="footer-nav footer-links cf">
            <!--<div class="m-all t-all hot d-1of2 footer-logo"> <img src="image/footer-logo.png"> </div>-->
          <!--

  <li id="menu-item-145" class="m-all t-all hot d-1of3">
                      <h3 class="heading">Our Story</h3>
                      <ul class="sub-menu ">
                <li id="menu-item-153" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-153"><a href="#">Assessment Services</a></li>
                <li id="menu-item-154" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-154"><a href="#">Educational Services</a></li>
                <li id="menu-item-155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-155"><a href="#">Research Services</a></li>
              </ul>
                    </li>

-->
            <li id="menu-item-42" class="m-all t-all hot d-1of2">
                      <h3 class="heading">Contact Us</h3>
                      <ul class="sub-menu">
                <li id="menu-item-153" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-153"><i class="fa fa-home fa-footer"></i>Gaithersburg, MD 20879 , Located only 23 miles away from Washington, DC </li>
                <li id="menu-item-154" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-154"><i class="fa fa-phone fa-footer"></i><a href="#">443-716-8075</a></li>
                <li id="menu-item-155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-155"><i class="fa fa-envelope fa-footer"></i><a href="mailto:manny@aerexperts.com">manny@aerexperts.com</a></li>
                <li id="menu-item-155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-155"><i class="fa fa-globe fa-footer"></i><a href="www.aerexperts.com" target="_blank">www.aerexperts.com</a></li>
							   <li id="menu-item-126" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-126"><a href="register.html" class="active">Register</a></li>
              </ul>
                    </li>
          </ul>
                  <div id="recent-posts-2" class="widget widget_recent_entries">
            <h3 class="widgettitle">From the Blog</h3>
            <ul>
                      <li> <a href="#">Risky Business – Overcoming the fear of failure</a> </li>
                    </ul>
          </div>
                </nav>
      </div>
              <div class="m-all t-all hot d-1of4 d-form footer-form">
        <p class="form-msg">Send us a short message</p>
        <div class='gf_browser_unknown gform_wrapper' id='gform_wrapper_6' >
                  <form method='post' enctype='multipart/form-data' target='gform_ajax_frame_6' id='gform_6'  action='/'>
            <div class='gform_body'>
                      <ul id='gform_fields_6' class='gform_fields top_label form_sublabel_below description_below'>
                <li id='field_6_1' class='gfield gfield_contains_required field_sublabel_below field_description_below' >
                          <label class='gfield_label' for='input_6_1' >First Name<span class='gfield_required'>*</span></label>
                          <div class='ginput_container'>
                    <input name='input_1' id='input_6_1' type='text' value='' class='large'  tabindex='1005'  placeholder='First Name*' />
                  </div>
                        </li>
                <li id='field_6_4' class='gfield field_sublabel_below field_description_below' >
                          <label class='gfield_label' for='input_6_4' >Phone</label>
                          <div class='ginput_container'>
                    <input name='input_4' id='input_6_4' type='tel' value='' class='large' tabindex='1007'  placeholder='Phone Number*' />
                  </div>
                        </li>
                <li id='field_6_3' class='gfield gfield_contains_required field_sublabel_below field_description_below' >
                          <label class='gfield_label' for='input_6_3' >Email<span class='gfield_required'>*</span></label>
                          <div class='ginput_container'>
                    <input name='input_3' id='input_6_3' type='email' value='' class='large' tabindex='1008'   placeholder='Email*'/>
                  </div>
                        </li>
              </ul>
                    </div>
          </form>
          <form method='post' enctype='multipart/form-data' target='gform_ajax_frame_6' id='gform_6'  action='/'>
            <div class='gform_footer top_label'>
            	<textarea placeholder="Remarks"></textarea>
                <input type='submit' id='gform_submit_button_6' class='gform_button button' value='Send' tabindex='1009' onclick='if(window["gf_submitting_6"]){return false;}  if( !jQuery("#gform_6")[0].checkValidity || jQuery("#gform_6")[0].checkValidity()){window["gf_submitting_6"]=true;}  ' />
                    </div>
          </form>
                </div>
        <iframe style='display:none;width:0px;height:0px;' src='about:blank' name='gform_ajax_frame_6' id='gform_ajax_frame_6' title='Ajax Frame'></iframe>        </div>
            </div>
  </footer>
        </div>
<link rel='stylesheet' id='gforms_reset_css-css'  href='css/formreset.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_formsmain_css-css'  href='css/formsmain.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_ready_class_css-css'  href='css/readyclass.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_browsers_css-css'  href='css/browsers.min.css' type='text/css' media='all' />

<script type='text/javascript'  src="js/jquery-2.1.1.min.js"></script>
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

</body>
</html>