<?php

$name = $_POST['name'];
$email = $_POST['email'];
//Avoid Email Injection and Mail Form Script Hijacking
if ( preg_match( "/[\r\n]/", $name ) || preg_match( "/[\r\n]/", $email ) ){
    die("Header injection detected!");
} else {
    //Load the value of departament select in a variable
    $youremail = $_POST['departament'];
    //Choose a recipient according to set value of "departament"
    switch ($youremail) {
        case 'to1':
            $youremail = 'marketing@radhatmt.com';
            break;
        case 'to2':
            $youremail = 'marketing@radhatmt.com';
            break;
        case 'to3':
            $youremail = 'marketing@radhatmt.com';
            break;
        case 'to4':
            $youremail = 'marketing@radhatmt.com';
            break;
        case 'to5':
            $youremail = 'marketing@radhatmt.com';
            break;
        case 'to6':
            $youremail = 'marketing@radhatmt.com';
            break;
        //and more if you need...
    }
    
    //Prepare a "pretty" version of the message
    //Important: if you added any form fields to the HTML, you will need to add them here also
    $body = "This is the form that was just submitted:
    --------------------------------------------------
    Name:  $_POST[name]
    E-Mail: $_POST[email]
    Phone: $_POST[phone]
    Message: $_POST[message]";
   $phone= $_POST["phone"];
    $message= $_POST["message"];
    $subject = $_POST['subject'];

    //Set the headers
    $headers = 'From: ' . $youremail . "\r\n" . //Your email. If the email does not appear in your inbox, check your spam folder and mark this email as non spam.
    'Reply-To: ' . $email . "\r\n" . //The value of email input
    'X-Mailer: PHP/' . phpversion();

	 $date = date("Y-m-d H:i:s"); 
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
				
					 $sql = "INSERT INTO contact_us(name, email, phone, message, date) VALUES ('$name', '$email', '$phone', '$message', '$date')";
					  $result = mysqli_query($conn,$sql);
    //Finally, send the message
  mail($youremail, $subject, $body, $headers);
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
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <title>RADHA TMT - Contact</title>

        <!-- CSS
        ===============================================================-->
        <!-- Bootstrap Core CSS -->
        <link href="http://radhatmt.com/wp-content/themes/radhatmt/css/bootstrap.min.css" rel="stylesheet">
        <!-- Icons -->
        <link href="http://radhatmt.com/wp-content/themes/radhatmt/assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- Flex Slider -->
        <link rel="stylesheet" href="http://radhatmt.com/wp-content/themes/radhatmt/assets/css/flexslider.css">
        <!-- Template CSS -->
        <link href="http://radhatmt.com/wp-content/themes/radhatmt/assets/css/main.css" id="theme" rel="stylesheet">
        <!-- Animation -->
        <link href="http://radhatmt.com/wp-content/themes/radhatmt/assets/css/animate.min.css" rel="stylesheet">
        <!-- Slick Carousel -->
        <link href="http://radhatmt.com/wp-content/themes/radhatmt/assets/css/slick.css" rel="stylesheet">
        <!-- Select Style -->
        <link href="http://radhatmt.com/wp-content/themes/radhatmt/assets/css/bootstrap-select.min.css" rel="stylesheet">

        <!-- JAVASCRIPT
        ===============================================================-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
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
                    <a class="navbar-brand" href="http://radhatmt.com/"><img src="http://radhatmt.com/wp-content/themes/radhatmt/assets/img/logo.png" alt="Logo"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li ><a href="http://radhatmt.com/">Home</a></li>
						 <li><a href="http://radhatmt.com/about-us">About Us</a></li>
						 <li class="dropdown">
						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Why Radha 550 TMT </a>
                            <ul class="dropdown-menu" role="menu">
                             <li ><a href="http://radhatmt.com/thermex">Tecnology </a></li>
							 <li><a href="http://radhatmt.com/benefits">Benefits </a></li>
							 <li><a href="http://radhatmt.com/quality">Quality</a></li>
                               
                            </ul>
						
						</li>
					
					   <li class="dropdown">
						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Products </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="http://radhatmt.com/radha-550-tmt">TMT BARS </a></li>
								 <!--<li><a href="radha-500-tmt.html">Radha 500 TMT </a></li>-->
								  <li><a href="http://radhatmt.com/ms-section">MS Sections </a></li>
                               
                            </ul>
						
						</li>
						
						
						 <li><a href="http://radhatmt.com/tmt-enquiry">TMT Enquiry  </a></li>
							 <li ><a href="http://radhatmt.com/clients">Clients </a></li>
                        <li class="active"><a href="http://radhatmt.com/contact">Contact</a></li>
                       
                        
                    </ul>
                </div>
            </div>
        </div>

        <!-- BREADCRUMB
        ===============================================================-->
        <div class="breadcrumb-container">
            <div class="container text-right">
               
            </div>
        </div>

        <!-- CONTACT
        ===============================================================-->
        <section class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                    <!-- CONTACT INFO -->
                    <div class="col-sm-12 col-md-5 cinfo">
                        
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.68332266404!2d78.42844911487684!3d17.426978688054906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90d571d107fb%3A0x580ff71af8e8754a!2sRadha+Smelters!5e0!3m2!1sen!2sin!4v1509541657564" width="462" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <address>
                            <p><i class="fa fa-map-marker"></i>8-2-269/S, Plot no.75 & 76, Sagar <br/>Co-operative Society Banjara hills, Road no. 2,<br/>Hyderabad - 500 034., Telangana INDIA.</p>
                            <p><i class="fa fa-phone"></i>+91 040-40142774</p>
							<p><i class="fa fa-phone"></i>+91 9100094000</p>
                            <p><i class="fa fa-envelope"></i>marketing@radhatmt.com</p>
                            
                        </address>
                        <div class="visible-xs-block visible-sm-block pt20"></div>
                    </div><!-- /Contact Info -->
                    <!-- CONTACT FORM -->
                    <div class="col-sm-12 col-md-7">
                        <h4 class="text-success">Successful validation</h4>
                        <p>Your email has been sent successfully.</p>
                    </div><!-- /Contact Form -->
                </div><!-- /row -->
            </div><!-- /container -->
        </section><!-- /section -->

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
                                <li class="number"><i class="fa fa-phone"></i> +91 040-40142774</li>
								 <li class="number"><i class="fa fa-phone"></i> +91 9100094000</li>
                                <li><i class="fa fa-envelope"></i>  marketing@radhatmt.com</li>
                            </ul>
                            <div class="visible-xs-block visible-sm-block pt20"></div>
                        </div>
                        <div class="footer-widget col-sm-6 col-md-4">
                            <h3>Menu</h3>
                        <ul class="footmenu">
                        <li ><a href="http://radhatmt.com/">Home</a></li>
						 <li ><a href="http://radhatmt.com/about-us">About Us</a></li>
						<li><a href="http://radhatmt.com/thermex">Thermex Tmt Technology </a></li>
						 <li><a href="http://radhatmt.com/quality">Quality</a></li>
						 <li><a href="http://radhatmt.com/clients">Clients</a></li>
                        <li><a href="http://radhatmt.com/contact">Contact</a></li>
                       
                        
                    </ul>
                            <div class="visible-xs-block visible-sm-block pt20"></div>
                        </div>
                        <div class="footer-widget col-sm-6 col-md-4" id="gettouch">
                            <h3>Get In Touch</h3>
                            
                            <!-- Newsletter Form-->
                              <form name="contactform" id="contactform" method="post" action="http://radhatmt.com/contactmail.php">
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
                                <li>
                                    <a href="https://business.facebook.com/Radha-Smelters-Private-Limited-201501633687865/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCXWM_HZQ3l5o5TJyc_T7JeA?disable_polymer=true" target="_blank">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-sm-6 credits">
                            <p>&copy; Radha Steel 2017. All Rights Reserved.</p>
                            <p class="small">
                               
                                
                            </p>
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
        <script src=http://radhatmt.com/wp-content/themes/radhatmt/assets/js/jquery-1.12.4.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="http://radhatmt.com/wp-content/themes/radhatmt/js/bootstrap.min.js"></script>
        <!-- Vanillabox -->
        <script src="http://radhatmt.com/wp-content/themes/radhatmt/assets/js/jquery.vanillabox-0.1.7.min.js"></script>
        <!-- Slick Carousel -->
        <script src="http://radhatmt.com/wp-content/themes/radhatmt/assets/js/slick.min.js"></script>
        <!-- Select Style -->
        <script src="http://radhatmt.com/wp-content/themes/radhatmt/assets/js/bootstrap-select.min.js"></script>
        <!-- Contact Form -->
        <script src="http://radhatmt.com/wp-content/themes/radhatmt/assets/js/form-validation.js"></script>
        <!-- Google Maps -->
        <!-- Get your API here https://developers.google.com/maps/documentation/javascript/?hl=es -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
        <!-- Flexslider -->
        <script src="http://radhatmt.com/wp-content/themes/radhatmt/assets/js/jquery.flexslider-min.js"></script>
        <!-- Placeholder for IE9 -->
        <script src="http://radhatmt.com/wp-content/themes/radhatmt/assets/js/jquery.placeholder.min.js"></script>
        <!-- Parallax -->
        <script src="http://radhatmt.com/wp-content/themes/radhatmt/assets/js/jquery.stellar.min.js"></script>
        <!-- Animation -->
        <script src="http://radhatmt.com/wp-content/themes/radhatmt/assets/js/wow.min.js"></script>
        <!-- Main -->
        <script src="http://radhatmt.com/wp-content/themes/radhatmt/assets/js/main.js"></script>
    </body>
</html>