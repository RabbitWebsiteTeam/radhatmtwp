<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
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
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
    </div>
            </div>
        </section>
