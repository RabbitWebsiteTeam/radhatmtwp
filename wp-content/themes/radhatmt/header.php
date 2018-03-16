<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="description" content=""><meta name="author" content="">
<meta name="google-site-verification" content="XRT6Ll0T2dH5tjMhf5bnK-RVp29a1nM-npBxxH5Tzn8" />
	<link href="<?php bloginfo('template_url'); ?>/assets/img/favicon.png" rel="icon" type="image/png" />
	<title>RADHA TMT</title>
	<!-- CSS
        ===============================================================--><!-- Bootstrap Core CSS -->
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet" /><!-- Icons -->
	<link href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.min.css" rel="stylesheet" /><!-- Flex Slider -->
	<link href="<?php bloginfo('template_url'); ?>/assets/css/flexslider.css" rel="stylesheet" /><!-- Template CSS -->
	<link href="<?php bloginfo('template_url'); ?>/assets/css/main.css" id="theme" rel="stylesheet" /><!-- Animation -->
	<link href="<?php bloginfo('template_url'); ?>/assets/css/animate.min.css" rel="stylesheet" /><!-- Slick Carousel -->
	<link href="<?php bloginfo('template_url'); ?>/assets/css/slick.css" rel="stylesheet" /><!-- Select Style -->
	<link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap-select.min.css" rel="stylesheet" />
	<style type="text/css">
	</style>
	
        <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '905556252922874');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=905556252922874&ev=PageView&noscript=1"
/></noscript>
<?php wp_head(); ?>
<!-- End Facebook Pixel Code -->
</head>

<body>
<div id="preloader">
<div class="cssload-container">
<div class="cssload-double-torus"></div>
</div>
</div> 
<!-- NAVBAR
        ===============================================================-->

<div class="navbar navbar-default navbar-default navbar-fixed-top"  <?php if ( is_home()){ echo 'id="homenav"'; } ?> role="navigation">
<div class="container">
<div class="navbar-header">
    <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>    
        <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img alt="Logo" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" /></a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
	<li class="active"><a href="<?php echo get_site_url(); ?>">Home</a></li>
	<li><a href="<?php echo get_site_url(); ?>/about-us">About Us</a></li>
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Why Radha 550 TMT </a>
	<ul class="dropdown-menu" role="menu">
		<li><a href="<?php echo get_site_url(); ?>/thermex">Technology </a></li>
		<li><a href="<?php echo get_site_url(); ?>/benefits">Benefits </a></li>
		<li><a href="<?php echo get_site_url(); ?>/quality">Quality</a></li>
		<li><a href="<?php echo get_site_url(); ?>/faqs">FAQs</a></li>
	     <li><a href="<?php echo get_site_url(); ?>/tips">Tips</a></li>  
	</ul>
	</li>
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Other Products </a>
	<ul class="dropdown-menu" role="menu">
		<li><a href="<?php echo get_site_url(); ?>/radha-550-tmt">TMT BARS </a></li>
		
		<li><a href="<?php echo get_site_url(); ?>/ms-section">MS Sections </a></li>
	</ul>
	</li>
	<li><a href="<?php echo get_site_url(); ?>/tmt-enquiry">TMT Enquiry </a></li>
	<li><a href="<?php echo get_site_url(); ?>/clients">Clients </a></li>
	<li  class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Download </a>
	 	<ul class="dropdown-menu" role="menu" style="min-width: 150px;">
		<li><a href="<?php bloginfo('template_url'); ?>/assets/pdf/Radha Brochure.pdf">Brochure </a></li>
		<li><a href="<?php bloginfo('template_url'); ?>/assets/pdf/Radha Leaflet Englsih.pdf">Leaflet Englsih </a></li>
		<li><a href="<?php bloginfo('template_url'); ?>/assets/pdf/Radha Leaflet Telugu.pdf">Leaflet Telugu</a></li>
		<li><a href="<?php bloginfo('template_url'); ?>/assets/pdf/Radha Leaflet Kannada.pdf">Leaflet Kannada </a></li>
	
	</ul>
	
	</li>
	<li><a href="<?php echo get_site_url(); ?>/contact">Contact</a></li>
</ul>
</div>
</div>
</div>


