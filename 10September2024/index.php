<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <title>Cleveland - Responsive Health And Medical Template</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,700|Raleway:400,400i,500i,600,700" rel="stylesheet"> 
    <!-- flaticon icon -->
    <link rel="stylesheet" href="assets/fonts/icon-font.min.css">
    <!-- icofont icon -->
    <link rel="stylesheet" href="assets/fonts/icofont.css">
    <!--- meanmenu Css-->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="assets/css/extralayers.css" media="screen" />
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- venobox -->
    <link rel="stylesheet" href="assets/venobox/css/venobox.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive  CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="home-2">

	<!-- START PRELOADER -->
	<div id="page-preloader">
		<div class="preloader-wrench"></div>
	</div>
	<!-- END PRELOADER --> 
    
	<!-- START HEADER SECTION -->
	<?php include "parts_front/header.php"; ?>
	<!-- END HEADER SECTION -->
	
	<!-- START SLIDER SECTION -->
	<?php include "parts_front/slider.php"; ?>
	<!-- END SLIDER SECTION  -->
	
	<!-- START ABOUT SECTION -->
    <?php include "parts_front/about.php"; ?>
    <!-- END ABOUT SECTION -->
	
	<!-- START SERViCE SECTION -->
	<?php include "parts_front/services.php"; ?>
    <!-- END SERViCE SECTION -->
	<?php include "parts_front/gallary_section.php"; ?>
	<!-- START GALLERY SECTION -->
    
    <!-- END GALLERY SECTION -->
	
	
	<!-- START VIDEO & FAQ -->
    <?php include "parts_front/video_faq.php"; ?>
    <!-- END VIDEO & FAQ -->
	
	<!-- START DOCTOR SECTION -->
	<?php include "parts_front/doctor_section.php"; ?>
    <!-- END DOCTOR SECTION -->
	
	<!-- START BLOG SERCTION -->
    <?php include "parts_front/blog_section.php"; ?>
    <!-- END BLOG SERCTION -->
	
	<!-- SINGLE DOCTOR PROMO -->
	<?php include "parts_front/single_doctor_promo.php"; ?>
	<!-- END SINGLE DOCTOR PROMO -->
	
    <!-- START FOOTER -->
    <?php include "parts_front/footer.php"; ?>
    <!-- END FOOTER -->
	
	<!-- Latest jQuery -->
	<?php include "parts_front/js.php"; ?>

	<!-- Js End Query -->
	
    
    <script>
            jQuery(document).ready(function() {			
            	jQuery('.tp-banner').show().revolution(
            	{
            		dottedOverlay:"none",
            		delay:16000,
            		startwidth:1170,
            		startheight:550,
            		hideThumbs:200,
            		
            		thumbWidth:100,
            		thumbHeight:50,
            		thumbAmount:5,
            		
            		navigationType:"bullet",
            		navigationArrows:"solo",
            		navigationStyle:"preview4",
            		
            		touchenabled:"on",
            		onHoverStop:"on",
            		
            		swipe_velocity: 0.7,
            		swipe_min_touches: 1,
            		swipe_max_touches: 1,
            		drag_block_vertical: false,
            								
            		parallax:"mouse",
            		parallaxBgFreeze:"on",
            		parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
            								
            		keyboardNavigation:"off",
            		
            		navigationHAlign:"center",
            		navigationVAlign:"bottom",
            		navigationHOffset:0,
            		navigationVOffset:20,
            
            		soloArrowLeftHalign:"left",
            		soloArrowLeftValign:"center",
            		soloArrowLeftHOffset:20,
            		soloArrowLeftVOffset:0,
            
            		soloArrowRightHalign:"right",
            		soloArrowRightValign:"center",
            		soloArrowRightHOffset:20,
            		soloArrowRightVOffset:0,
            				
            		shadow:0,
            		fullWidth:"on",
            		fullScreen:"off",
            
            		spinner:"spinner4",
            		
            		stopLoop:"off",
            		stopAfterLoops:-1,
            		stopAtSlide:-1,
            
            		shuffle:"off",
            		
            		autoHeight:"off",						
            		forceFullWidth:"off",						
            									
            								
            		hideThumbsOnMobile:"off",
            		hideNavDelayOnMobile:1500,						
            		hideBulletsOnMobile:"off",
            		hideArrowsOnMobile:"off",
            		hideThumbsUnderResolution:0,
            		
            		hideSliderAtLimit:0,
            		hideCaptionAtLimit:0,
            		hideAllCaptionAtLilmit:0,
            		startWithSlide:0,
            		fullScreenOffsetContainer: ""	
            	});				
            });	//ready
            
       </script>
</body>

</html>