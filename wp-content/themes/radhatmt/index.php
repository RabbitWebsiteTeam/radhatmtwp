<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<header class="container-fluid intro-slider">

<div class="bg-slider-wrapper">
<div class="flexslider bg-slider" id="bg-slider">
<ul class="slides">
	<li class="slide slide-1"></li>
</ul>
</div>

<div class="darrow"><a alt="Scroll Down" href="#homehead"><img src="<?php bloginfo('template_url'); ?>/assets/img/darw.png" /></a></div>
</div>

<!-- HOME PROMO -->

<section class="home-promo">
<div class="text-center wow">
<h2 class="titlepro"><!--  <span class="middle"><img src="http://radhatmt.com/assets/img/banner-logo.png"></span>  --></h2>
<!-- <a href="" class="btn btn-transparent"><i class="fa fa-download"></i> Download</a> --></div>
</section>
</header>
<section class="bg-gray" id="homehead">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="custom-title">
<h2>RADHA 550 TMT BARS FOR STRONG & RESILIENT STRUCTURES<br />
<span class="thinf">For Strong &amp; Resilient Tmt Bars</span></h2>

<div class="colorline"></div>
</div>
</div>
<!-- VIDEO -->

<div class="col-sm-12 col-md-4">
<div class="embed-responsive embed-responsive-16by9"><img alt="Services" class="img-responsive img-center" height="250" src="<?php bloginfo('template_url'); ?>/assets/img/360-x-250-german-tech.png" width="360" /></div>

<div class="visible-xs-block visible-sm-block pt20"></div>
</div>
<!-- DESCRIPTION -->

<div class="col-sm-12 col-md-8">
<p style="text-align:justify;">We produce steel of higher strength, ductility, weldability, bonding and bendability by implementing the revolutionary Thermex technology that is used globally to manufacture high quality TMT bars. These bars also offer the additional advantage of being anti-corrosive, earthquake & heat resistant. Our TMT bars make slimmer pillars possible, which contributes towards a larger carpet area. All these properties make Radha 550 TMT bars the ideal and ultimate choice of both small and large project consultants, architects, structural engineers and builders.</p>
<p style="text-align:justify;">Radha Smelters is proud to be amongst the select few primary steel plants to adopt the highly acclaimed, cutting-edge German technology - Thermex which is the same manufacturing process being employed by the Durgapur and Bhilai steel plants of SAIL. </p>
</div>
</div>
<!-- /row --></div>
<!-- /container --></section>
<!-- /section About Us -->

<section class="bg-white">
<div class="container">
<div class="row"><!-- VIDEO -->
<div class="col-sm-12 col-md-12">
<div class="embed-responsive embed-responsive-16by9"><iframe  height="315" src="https://www.youtube.com/embed/aJo7AhCw9HA" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>

<div class="visible-xs-block visible-sm-block pt20"></div>
</div>
</div>
<!-- /row --></div>
<!-- /container --></section>
<!-- /section About Us --><!-- CLIENTS -->

<section class="bg-white">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="title">
<h2>Our Esteemed Clients</h2>
</div>
</div>

<div class="col-md-12">
<div class="slick-carousel" id="clients">
<div><a href=""><img alt="Client" src="http://radhatmt.com/assets/img/clients/Logo 1.png" /></a></div>

<div><a href=""><img alt="Client" src="http://radhatmt.com/assets/img/clients/Logo 2.png" /></a></div>

<div><a href=""><img alt="Client" src="http://radhatmt.com/assets/img/clients/Logo 3.png" /></a></div>

<div><a href=""><img alt="Client" src="http://radhatmt.com/assets/img/clients/Logo 4.png" /></a></div>

<div><a href=""><img alt="Client" src="http://radhatmt.com/assets/img/clients/Logo 5.png" /></a></div>

<div><a href=""><img alt="Client" src="http://radhatmt.com/assets/img/clients/Logo 6.png" /></a></div>

<div><a href=""><img alt="Client" src="http://radhatmt.com/assets/img/clients/Logo 7.png" /></a></div>

<div><a href=""><img alt="Client" src="http://radhatmt.com/assets/img/clients/Logo 8.png" /></a></div>

<div><a href=""><img alt="Client" src="http://radhatmt.com/assets/img/clients/Logo 9.png" /></a></div>

<div><a href=""><img alt="Client" src="http://radhatmt.com/assets/img/clients/Logo 10.png" /></a></div>

<div><a href=""><img alt="Client" src="http://radhatmt.com/assets/img/clients/Logo 11.png" /></a></div>

<div><a href=""><img alt="Client" src="http://radhatmt.com/assets/img/clients/Logo 12.png" /></a></div>

<div><a href=""><img alt="Client" src="http://radhatmt.com/assets/img/clients/Logo 13.png" /></a></div>

<div><a href=""><img alt="Client" src="http://radhatmt.com/assets/img/clients/Logo 14.png" /></a></div>

<div><a href=""><img alt="Client" src="http://radhatmt.com/assets/img/clients/Logo 15.png" /></a></div>
</div>
</div>
</div>
<!-- /row --></div>
<!-- /container --></section>
<!-- /section Clients --><!-- FOOTER


<?php get_footer();
