<?php 
			if (isset($_POST['btnsubmit'])) {
				
			     $name = $_POST["name"];
				 $phone = $_POST["mobile"];
				 $email = $_POST["mail"];
				  $state = $_POST['state']; 
				  $date = date("Y-m-d H:i:s"); 

				$from_mail="marketing@radhatmt.com";

         
				$header = "From: ".$from_mail." \r\n";

				$header .= "MIME-Version: 1.0\r\n";
				$header .= "Content-type: text/html\r\n";

				$source = "Radha TMT";

				$to="marketing@radhatmt.com";               
				$subject = "Radha TMT - $name details";
				$message = "<html> <body>";
				$message .= "<table cellspacing='0' cellpadding='0' border='0' width='600' align='center' style='border:1px solid #ccc;'>
				<tr><td colspan='2'><img src='' border='0'/></td></tr>
				<tr><td colspan='2' style='padding:10px 50px 5px 50px;  font-family:arial; font-size:14px; font-weight:bold; color:#000;'>Radha TMT Form Details</td></tr>
				<tr><td style='padding:5px 50px 5px 50px; font-family:arial; font-size:12px; color:#000;'>Name:</td><td style='padding:5px 50px 5px 50px; font-family:arial; font-size:12px; color:#000;'> $name </td> </tr>
				<tr><td style='padding:5px 50px 5px 50px; font-family:arial; font-size:12px; color:#000;'>Phone:</td><td style='padding:5px 50px 5px 50px; font-family:arial; font-size:12px; color:#000;'> $phone</td></tr>  
				<tr><td style='padding:5px 50px 5px 50px; font-family:arial; font-size:12px; color:#000;'>E-mail:</td><td style='padding:5px 50px 5px 50px; font-family:arial; font-size:12px; color:#000;'> $email </td></tr> 
				<tr><td style='padding:5px 50px 5px 50px; font-family:arial; font-size:12px; color:#000;'>State:</td><td style='padding:5px 50px 5px 50px; font-family:arial; font-size:12px; color:#000;'> $state </td></tr> 
				</table>
				</body>
				</html>"; 
				   $servername = "localhost";
				   $username = "radhatmt_user";
				   $password = "Rabbit@123";
					$dbname = "radhatmt_db";


					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
					if (!$conn) {
						die("Connection failed: " . $conn->connect_error);
					}
				
					 $sql = "INSERT INTO price_enquiry(name, phone, email, state, date) VALUES ('$name', '$phone', '$email', '$state', '$date')";
					  $result = mysqli_query($conn,$sql);
					 //print_r($result);
				 $sent = mail ($to,$subject,$message,$header);
			$tq = "Thank you for contacting us,<br/> We will get back to you soon.";
			
			}
		?>
		<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="google-site-verification" content="XRT6Ll0T2dH5tjMhf5bnK-RVp29a1nM-npBxxH5Tzn8" />
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <title>RADHA TMT PRODUCTS </title>

        <!-- CSS
        ===============================================================-->
        <!-- Bootstrap Core CSS -->
        <link href="http://radhatmt.com/wp/wp-content/themes/radhatmt/css/bootstrap.min.css" rel="stylesheet">
        <!-- Icons -->
        <link href="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- Flex Slider -->
        <link rel="stylesheet" href="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/css/flexslider.css">
        <!-- Template CSS -->
        <link href="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/css/main.css" id="theme" rel="stylesheet">
        <!-- Animation -->
        <link href="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/css/animate.min.css" rel="stylesheet">
        <!-- Slick Carousel -->
        <link href="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/css/slick.css" rel="stylesheet">
        <!-- Select Style -->
        <link href="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/css/bootstrap-select.min.css" rel="stylesheet">

        <!-- JAVASCRIPT
        ===============================================================-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
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
<!-- End Facebook Pixel Code -->
    </head>

    <body>

        <!-- PRELOADER
        ===============================================================-->
        <div id="preloader">
            <div class="cssload-container">
                <div class="cssload-double-torus"></div>
            </div>
        </div>

        <!-- NAVBAR
        ===============================================================-->
         <div class="navbar navbar-default navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://radhatmt.com/wp/"><img src="assets/img/logo.png" alt="Logo"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li ><a href="http://radhatmt.com/wp/">Home</a></li>
						 <li><a href="http://radhatmt.com/wp/about-us">About Us</a></li>
						 <li class="dropdown">
						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Why Radha 550 TMT </a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="http://radhatmt.com/wp/thermex">Technology  </a></li>
							 <li><a href="http://radhatmt.com/wp/benefits">Benefits </a></li>
							 <li><a href="http://radhatmt.com/wp/quality">Quality</a></li>
                              	<li><a href="http://radhatmt.com/wp/faqs">FAQs</a></li>
	     <li><a href="http://radhatmt.com/wp/tips">Tips</a></li>   
                            </ul>
						
						</li>
					
					   <li class="dropdown">
						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Products </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="http://radhatmt.com/wp/radha-550-tmt">TMT BARS </a></li>
						 <!--<li><a href="radha-500-tmt.html">Radha 500 TMT </a></li>-->
								  <li><a href="http://radhatmt.com/wp/ms-section">MS Sections </a></li>
                               
                            </ul>
						
						</li>
						
						
						 <li class="active"><a href="http://radhatmt.com/wp/tmt-enquiry">TMT Enquiry  </a></li>
							 <li ><a href="http://radhatmt.com/wp/clients">Clients </a></li>
							 	<li  class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Download </a>
	 	<ul class="dropdown-menu" role="menu" style="min-width: 150px;">
		<li><a href="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/pdf/Radha Brochure.pdf">Brochure </a></li>
		<li><a href="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/pdf/Radha Leaflet Englsih.pdf">Leaflet Englsih </a></li>
		<li><a href="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/pdf/Radha Leaflet Telugu.pdf">Leaflet Telugu</a></li>
		<li><a href="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/pdf/Radha Leaflet Kannada.pdf">Leaflet Kannada </a></li>
	
	</ul>
	
	</li>
                        <li><a href="http://radhatmt.com/wp/contact">Contact</a></li>
                       
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB
        ===============================================================-->
        <div class="breadcrumb-container-enquiry">
         
		     <div class="container text-right">
               
            </div>
        </div>

        <!-- SERVICES
        ===============================================================-->
		   <section class="bg-white">
            <!-- CORPORATE -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-title">
                            <h2>RADHA 550 TMT Enquiry</h2>
							<div class="colorline"></div>
                        </div>
                    </div>
                   <div class="col-sm-12 col-md-6">
                <div class="tq"><?php if(isset($tq)){echo $tq;}?></div>
				   <p>Fill in your details below:</p>
                	<div class="frmData">
						<form action="" method="post"  >
						<label>Select State<span> *</span></label>
						<select name="state" id="state"  required="required">
							<option value="">Select</option>
							<option value="Telangana">Telangana</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Karnataka">Karnataka </option></select>
						<div class="clearfix"></div>
						<label>Name<span> *</span></label><input type="text" id="name" name="name" autocomplete="off" required="required">
						<div class="clearfix"></div>
						<label>Phone<span> *</span></label><input type="text" pattern="^([0|\+[0-9]{1,5})?([1-9][0-9]{9})$" id="mobile" name="mobile" autocomplete="off" required="required">
						<div class="clearfix"></div>
						<label>Email<span> *</span></label><input type="email"  id="mail" name="mail" autocomplete="off" required="required">
						<div class="clearfix"></div><br/>
						<label>&nbsp;</label><input type="submit" name="btnsubmit" value="Submit">
						</form>
			</div>
			</div>
	<div class="col-sm-12 col-md-6">		
	<!--<div id="price" <?php if((isset($state)) && ($state=="Telangana")){echo "style='display:block;'"; } else { echo "style='display:none;'";} ?>>-->	<div id="price">	
	<p class="style2">Recommended Consumer Price Details</p>
	<div class="frmData">
<table cellpadding="0" cellspacing="0" class="priceTbl">
	<thead>
    	<tr>
		     <td align="center">S No</td>
        	<td align="center">TMT BAR SIZE</td>
            <td align="center">RCP (Per Price)</td>
        </tr>
    </thead>
    <tbody>
    	<tr>
		  <td align="center">1</td>
        	<td align="center">8 mm</td>
            <td align="center">277</td>
        </tr>
        <tr>
		 <td align="center">2</td>
        	<td align="center">10 mm</td>
            <td align="center">423</td>
        </tr>
        <tr>
		 <td align="center">3</td>
        	<td align="center">12 mm</td>
            <td align="center">608</td>
        </tr>
        <tr>
		    <td align="center">4</td>
        	<td align="center">16 mm</td>
            <td align="center">1079</td>
        </tr>
        <tr>
		    <td align="center">5</td>
        	<td align="center">20 mm</td>
            <td align="center">1695</td>
        </tr>
        <tr>
		     <td align="center">6</td>
        	<td align="center">25 mm</td>
            <td align="center">2642</td>
        </tr>
        <tr>
		    <td align="center">7</td>
        	<td align="center">32 mm</td>
            <td align="center">4417</td>
        </tr>
    </tbody>
</table><br/>
<a href="assets/img/rcp-15.pdf"><b>Click here to download the RCP</b></a><br/><br/>
<ul>
<li>All bars are 12 meter in length</li>
<li>The above prices are inclusive of all taxes</li>
<li>All dimensions are subject to BIS tolereance</li>
</ul>

</div>
</div>
</div>

 </div>
                 
                </div>
            </div>
        </section>
		
    
    
        <!-- FOOTER
        ===============================================================-->
        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="footer-widget col-sm-12 col-md-4">
                            <h3>About us</h3>
                            <p><a href="about.html">RADHA SMELTERS PRIVATE LIMITED</a></p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i> 8-2-269/S, Plot no.75 & 76, Sagar <br/>Co-operative Society Banjara hills, Road no. 2,<br/>Hyderabad - 500 034., Telangana INDIA.</li>
                                <li class="number"><i class="fa fa-phone"></i> +91 40-40142774</li>
								 <li class="number"><i class="fa fa-phone"></i> +91 91000 94000</li>
                                <li><i class="fa fa-envelope"></i>  marketing@radhatmt.com</li>
                            </ul>
                            <div class="visible-xs-block visible-sm-block pt20"></div>
                        </div>
                        <div class="footer-widget col-sm-6 col-md-4">
                            <h3>Menu</h3>
                       <ul class="footmenu">
                        <li ><a href="index.html">Home</a></li>
						 <li ><a href="about.html">About Us</a></li>
						<li><a href="thermex.html">Thermex Tmt Technology </a></li>
						
						 <li><a href="quality.html">Quality</a></li>
						 <li><a href="clients.html">Clients</a></li>
                        <li><a href="contact.html">Contact</a></li>
                       
                        
                    </ul>
                            <div class="visible-xs-block visible-sm-block pt20"></div>
                        </div>
                        <div class="footer-widget col-sm-6 col-md-4" id="gettouch">
                            <h3>Get In Touch</h3>
                            
                            <!-- Newsletter Form-->
                              <form name="contactform" id="contactform" method="post" action="contactmail.php">
                            <fieldset>
                            <div class="row">
                             
                              
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="sr-only" for="name">Name<br></label>
                                        <div class="inner-addon left-addon">
                                            <i class="fa fa-user"></i>
                                            <input type="text" class="form-control required" placeholder="Name" name="name" id="name" data-name="Name">
                                        </div>
                                    </div>
                                    <div class="row row-lg">
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <label class="sr-only" for="email">Email<br></label>
                                                <div class="inner-addon left-addon">
                                                    <i class="fa fa-envelope"></i>
                                                    <input type="email" class="form-control required required-email" placeholder="Email" name="email" id="email" data-name="Email" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="sr-only" for="name">Phone<br></label>
                                                <div class="inner-addon left-addon">
                                                    <i class="fa fa-phone"></i>
                                                    <input type="text" class="form-control" placeholder="Phone" name="phone" id="phone" data-name="Phone">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="message">Message<br></label>
                                        <div class="inner-addon left-addon">
                                            <i class="fa fa-comment"></i>
                                            <textarea rows="3" name="message" id="message" class="form-control required" placeholder="Message" data-name="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row actions">
                                <div class="col-sm-12 col-md-6">
                                    <input type="submit" value="Submit" name="submit" id="submitButton" class="btn btn-default btn-primary-corp-big" title="Click here to submit your message!" />
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="alert alert-danger" role="alert" id="alertform">...</div>
                                </div>
                            </div>
                            </fieldset>
                        </form>
                            
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
       
            <!--back to top-->
            <a href="#" class="scrollToTop" id="scrollToTop"><i class="fa fa-angle-up"></i></a>
        </footer>
        <!-- JAVASCRIPT
        ===============================================================-->
        <!-- JQuery -->
        <script src="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/js/jquery-1.12.4.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="http://radhatmt.com/wp/wp-content/themes/radhatmt/js/bootstrap.min.js"></script>
        <!-- Vanillabox -->
        <script src="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/js/jquery.vanillabox-0.1.7.min.js"></script>
        <!-- Slick Carousel -->
        <script src="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/js/slick.min.js"></script>
        <!-- Select Style -->
        <script src="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/js/bootstrap-select.min.js"></script>
        <!-- Flexslider -->
        <script src="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/js/jquery.flexslider-min.js"></script>
        <!-- Placeholder for IE9 -->
        <script src="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/js/jquery.placeholder.min.js"></script>
        <!-- Parallax -->
        <script src="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/js/jquery.stellar.min.js"></script>
        <!-- Animation -->
        <script src="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/js/wow.min.js"></script>
        <!-- Main -->
        <script src="http://radhatmt.com/wp/wp-content/themes/radhatmt/assets/js/main.js"></script>
		
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110000403-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110000403-1');
</script>		
<script type="text/javascript">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:"075658f0e1f3f513b6d0d0c457b5944dbd1c5706da7b878cca2cc377a3604259", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>		
    </body>
</html>