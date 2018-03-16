<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

	<footer>
<div class="footer-top">
<div class="container">
<div class="row">
<div class="footer-widget col-sm-12 col-md-4">
<h3>About us</h3>

<p><a href="about.html">RADHA SMELTERS PRIVATE LIMITED</a></p>

<ul class="list-unstyled">
	<li>8-2-269/S, Plot no.75 &amp; 76, Sagar<br />
	Co-operative Society Banjara hills, Road no. 2,<br />
	Hyderabad - 500 034., Telangana INDIA.</li>
	  <li class="number"><i class="fa fa-phone"></i> +91 40-40142774</li>
								 <li class="number"><i class="fa fa-phone"></i> +91 91000 94000</li>
                                <li><i class="fa fa-envelope"></i>  marketing@radhatmt.com</li>
</ul>

<div class="visible-xs-block visible-sm-block pt20"></div>
</div>

<div class="footer-widget col-sm-6 col-md-4">
<h3>Menu</h3>

<ul class="footmenu">
	<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
	<li><a href="<?php echo get_site_url(); ?>/about-us">About Us</a></li>
	<li><a href="<?php echo get_site_url(); ?>/thermex">Thermex Tmt Technology </a></li>
	<li><a href="<?php echo get_site_url(); ?>/quality">Quality</a></li>
	<li><a href="<?php echo get_site_url(); ?>/clients">Clients</a></li>
	<li><a href="<?php echo get_site_url(); ?>/contact">Contact</a></li>
</ul>

<div class="visible-xs-block visible-sm-block pt20"></div>
</div>

<div class="footer-widget col-sm-6 col-md-4" id="gettouch">
<h3>Get In Touch</h3>
<!-- Newsletter Form-->
<?php echo do_shortcode('[contact-form-7 id="98" title="get in touch"]'); ?>
</div>
</div>

</div>
</div>

<div class="footer-bottom">
<div class="container">
<div class="row">
<div class="col-sm-6 social">
<ul class="list-inline social">
	<li><a href="https://www.facebook.com/radhatmtofficial/" target="_blank"> <i class="fa fa-facebook"></i></a></li>
	<li><a href="https://www.youtube.com/channel/UCXWM_HZQ3l5o5TJyc_T7JeA" target="_blank"> <i class="fa fa-youtube"></i></a></li>
	<li><a href="https://www.linkedin.com/company/radha-smelters-private-limited/" target="_blank"> <i class="fa fa-linkedin"></i></a></li>
	<li><a href="https://plus.google.com/u/0/115138463455556974742" target="_blank"> <i class="fa fa-google"></i></a></li>
	<li><a href="https://in.pinterest.com/radhatmt/" target="_blank"> <i class="fa fa-pinterest"></i></a></li>
	<li><a href=" https://twitter.com/Radha_TMT" target="_blank"> <i class="fa fa-twitter"></i></a></li>
</ul>
</div>

<div class="col-sm-6 credits">
<a href="http://rabbitdigital.in/"><img src="http://radhatmt.com/assets/img/rabbit.png"></a>


<p class="small"></p>
</div>
</div>
</div>
</div>
       
<!--back to top--></footer>
<!-- JAVASCRIPT
        ===============================================================--><!-- JQuery --><script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-1.12.4.min.js"></script><!-- Bootstrap Core JavaScript --><script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script><!-- Vanillabox -->
		<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.vanillabox-0.1.7.min.js"></script><!-- Slick Carousel --><script src="<?php bloginfo('template_url'); ?>/assets/js/slick.min.js"></script><!-- Select Style --><script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap-select.min.js"></script><!-- Flexslider --><script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.flexslider-min.js"></script><!-- Placeholder for IE9 --><script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.placeholder.min.js"></script><!-- Parallax --><script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.stellar.min.js"></script><!-- Parallax --><script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.stellar.min.js"></script><!-- Animation --><script src="<?php bloginfo('template_url'); ?>/assets/js/wow.min.js"></script><!-- Main -->
		<script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>
		<script  src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
		
		<script>
  var $root = $('html, body');
$('.darrow a').click(function() {
    var href = $.attr(this, 'href');
    $root.animate({
        scrollTop: $(href).offset().top
    }, 500, function () {
        window.location.hash = href;
    });
    return false;
});
  </script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110000403-1"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110000403-1');
</script>

<script type="text/javascript">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:"075658f0e1f3f513b6d0d0c457b5944dbd1c5706da7b878cca2cc377a3604259", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
