<?php /* Template Name: Example Template */ ?>

<?php get_header(); ?>
	<section class="landing-page">
		<div class="right_split">
		</div>
		<div class="left_split">
		</div>
			<div class="container">
				<div class="lp-wrapper">
					<div class="lp-left">
						<div class="logo">
							<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_lp.png" alt="Gunther and Co."></h1>
						</div>
						<h2>Modern American<br />
						Globally Influenced<br />
						Locally Spun</h2>
						<h3>Coming Spring 2016</h3>
					</div>
					<div class="lp-right lp-form">
						<!-- Begin MailChimp Signup Form -->
						<h3>Enter to Win a Chef’s Dinner!</h3>
						<p>Fill out form below to be entered to win and receive updates from Gunther & Co.</p>
						<div id="mc_embed_signup">
							<form action="//guntherandco.us12.list-manage.com/subscribe/post?u=58890f0a3e19da18a7199183a&amp;id=df08994e44" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							    <div id="mc_embed_signup_scroll">
								
									<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
										<div class="mc-field-group first-name">
											<label for="mce-FNAME">First Name </label>
											<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
										</div>
									<div class="mc-field-group last-name">
										<label for="mce-LNAME">Last Name </label>
										<input type="text" value="" name="LNAME" class="" id="mce-LNAME" placeholder="Last Name">
									</div>
									<div class="mc-field-group">
										<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
										<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
									</div>
									<div class="mc-field-group size1of2">
										<label for="mce-MMERGE3-month">Birthday </label>
										<div class="datefield">
											<span class="subfield monthfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="Brith Month" size="2" maxlength="2" name="MMERGE3[month]" id="mce-MMERGE3-month"></span>
											<span class="subfield dayfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="Birth Day" size="2" maxlength="2" name="MMERGE3[day]" id="mce-MMERGE3-day"></span> 
										</div>
									</div>
									<div id="mce-responses" class="clear">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							   		<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_58890f0a3e19da18a7199183a_df08994e44" tabindex="-1" value=""></div>
							    	<div class="clear"><input type="submit" value="Enter Now!" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
							    </div>
							</form>
						</div>

						<!--End mc_embed_signup-->	

					</div>
				</div>
				
			</div>
	</section>

<?php get_footer(); ?>
