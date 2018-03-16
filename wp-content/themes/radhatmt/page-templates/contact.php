<?php

/*

Template Name: contact

*/

?>

<?php get_header(); ?>
 <!-- BREADCRUMB
        ===============================================================-->
        <div class="breadcrumb-container-aboutus">

		   <div class="container text-right">
                
            </div>
        </div>
        <!-- CONTACT
        ===============================================================-->
        <section class="bg-white">
            <div class="container">
                <div class="row wow fadeIn">
                    <div class="col-md-12">
                        <div class="custom-title">
                            <h2>Contact Us</h2>
							<div class="colorline"></div>
                        </div>
                    </div>
                    <!-- CONTACT INFO -->
                    <div class="col-sm-12 col-md-5 cinfo">
                        
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.68332266404!2d78.42844911487684!3d17.426978688054906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90d571d107fb%3A0x580ff71af8e8754a!2sRadha+Smelters!5e0!3m2!1sen!2sin!4v1509541657564" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <address>
                            <p><i class="fa fa-map-marker"></i>8-2-269/S, Plot no.75 & 76, Sagar <br/>Co-operative Society Banjara hills, Road no. 2,<br/>Hyderabad - 500 034., Telangana INDIA.</p>
                            <p><i class="fa fa-phone"></i>+91 40-40142774</p>
							<p><i class="fa fa-phone"></i>+91 91000 94000</p>
                            <p><i class="fa fa-envelope"></i>marketing@radhatmt.com</p>
                            
                        </address>
                        <div class="visible-xs-block visible-sm-block pt20"></div>
                    </div><!-- /Contact Info -->
                    <!-- CONTACT FORM -->
                    <div class="col-sm-12 col-md-7">
                        <form name="contactform" id="contactform" method="post" action="http://radhatmt.com/contactmail.php">
                            <fieldset>
                            <div class="row">
                                <div class="col-md-5 col-lg-4">
                                    <div class="form-group">
                                        <select class="selectpicker" data-style="selectcorp" name="departament" id="departament">
                                            <option value="to1">General Informations</option>
                                            <option value="to2">Administrative</option>
                                            <option value="to3">Marketing</option>
                                            <option value="to4">Sales</option>
                                            <option value="to5">Technical Support</option>
                                            <option value="to6">Careers</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-8">
                                    <div class="form-group">
                                        <label class="sr-only" for="subject">Subject<br></label>
                                        <div class="inner-addon left-addon">
                                            <i class="fa fa-pencil"></i>
                                            <input type="text" class="form-control required" placeholder="Subject" name="subject" id="subject">
                                        </div>
                                    </div>
                                </div>
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
                                                    <input type="email" class="form-control required required-email" placeholder="Email" name="email" id="email" data-name="Email">
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
                                            <textarea rows="13" name="message" id="message" class="form-control required" placeholder="Message" data-name="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row actions">
                                <div class="col-sm-12 col-md-6">
                                    <input type="submit" value="&#xf1d9; &nbsp;Send Your Message" name="submit" id="submitButton" class="btn btn-default btn-primary-corp-big" title="Click here to submit your message!" />
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="alert alert-danger" role="alert" id="alertform">...</div>
                                </div>
                            </div>
                            </fieldset>
                        </form>
                        <p>&nbsp;</p>
                    </div><!-- /Contact Form -->
                </div><!-- /row -->
            </div><!-- /container -->
        </section><!-- /section -->

  


<?php get_footer(); ?>