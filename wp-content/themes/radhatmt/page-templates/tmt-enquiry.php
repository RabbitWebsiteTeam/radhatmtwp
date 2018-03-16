<?php

/*

Template Name: tmt-enquiry

*/

?>

<?php get_header(); ?>
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
	<!--<div id="price" <?php if((isset($state)) && ($state=="Telangana")){echo "style='display:block;'"; } else { echo "style='display:none;'";} ?>>-->	
<div id="price">
<p class="style2">Recommended Consumer Price Details</p>
<div class="frmData">
<table class="priceTbl" cellspacing="0" cellpadding="0">
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
</table>
<p><a href="http://radhatmt.com/assets/img/rcp-15.pdf"><b>Click here to download the RCP</b></a></p>
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



<?php get_footer(); ?>