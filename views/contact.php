	<style>
		.error {
			color: #f94848 !important;
		}
		#msgSubmit {
			display : inline-block;
			margin-left : 20px; 
		}
		@media only screen and (max-width: 680px) {
			#msgSubmit {
				display : block;
				margin : 10px 0px 0px 0px;
			}
		}
	</style>
	<!-- GOOGLE MAP -->
	<div class="gmap_canvas">
		<iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15553.282020398963!2d80.13791302216798!3d12.951331423108302!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc70e821bb3a093cd!2sAMBE%20DIAGNOSTIC%20CENTRE!5e0!3m2!1sen!2sin!4v1576566766197!5m2!1sen!2sin" 
			width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>
	<!-- END GOOGLE MAP -->

	<!-- START CONTACT SECTION -->
	<section id="contact" class="section-padding">
		<div class="auto-container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="contact-title">
						<h4>You Have Any question? Simply Send Us Message</h4>
						<p>Please don't hesitate to contact us regarding any questions and enquiries you may have</p>
						<hr>
					</div>
					<div class="contact-form mt-4">
						<form id="contact-form" class="form" name="enq" method="POST"
							action="includes/process.php">
							<div class="row">
								<div class="form-group col-lg-6">
									<label>Name</label>
									<span class="form-icon"><i class="icofont icofont-user-alt-5"></i></span>
									<input name="name" class="form-control form-controlb" id="cname" type="text">
								</div>
								<div class="form-group col-lg-6">
									<label>Email</label>
									<span class="form-icon"><i class="icofont icofont-envelope"></i></span>
									<input name="email" class="form-control form-controlb" id="cmail"
										type="email">
								</div>
								<div class="form-group col-lg-6">
									<label>Number</label>
									<span class="form-icon"><i class="icofont icofont-telephone"></i></span>
									<input name="phone" class="form-control form-controlb" id="cnumber"
										type="text">
								</div>
								<div class="form-group col-lg-6">
									<label>Subject</label>
									<span class="form-icon"><i class="icofont icofont-ui-email"></i></span>
									<input name="subject" class="form-control form-controlb" id="csubject"
										type="text">
								</div>
								<div class="form-group col-lg-12">
									<label>Message</label>
									<textarea rows="6" name="message" class="form-control" id="cmessage"
										placeholder="Your Message Here..."></textarea>
								</div>
								<div class="form-group col-lg-12">
									<label>Recaptcha</label>
									<div class="g-recaptcha" data-sitekey="6LdSS7kUAAAAANzzuoTVsq-nP5teBODrYAZex5LA" 
                                        data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"></div>
                                    <input id="grecaptcha" name="grecaptcha" type="text" 
                                        style="opacity: 0; position: absolute; top: 0; left: 0; height: 1px; width: 1px;" />
								</div>
								<div class="form-group col-lg-12 mb0">
									<div class="actions">
										<input value="Submit Message" name="submit" id="submitButton"
											class="btn btn-lg btn-contact-bg" title="Click here to submit your message!"
											type="submit">
										<img src="assets/img/ajax-loader.gif" id="loader" style="display:none"
											alt="loading" width="16" height="16">
										<div id="msgSubmit" class="h3 text-center hidden"></div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div
					class="col-lg-4 col-md-4 col-sm-12 col-12 pl-lg-5 pl-md-5 pl-sm-2 pl-2 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
					<div class="contact-title">
						<h4>Get In Touch</h4>
						<p>Our staff will treat you like a long time friend</p>
						<hr>
					</div>
					<div class="address-box mt-4">
						<div class="single-address-box mb-3">
							<span>Address:</span>
							<p>179, Radha Nagar Main Rd, Doctors Colony, Chromepet, Chennai</p>
						</div>
						<div class="single-address-box mb-3">
							<span>Phone:</span>
							<p><a href="tel:04443535554">044 43535554</a></p>
							<p><a href="tel:+919042169251">+91 9042169251</a></p>
						</div>
						<div class="single-address-box">
							<span>Inquires:</span>
							<p><a href="mailto:jeeyes1@gmail.com">jeeyes1@gmail.com</a></p>
						</div>
					</div>
					<div class="free-quote-box mt-4">
						<h6>Ask question</h6>
						<h3>Support is ready</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy. </p>
						<a href="#">Free quote <i class="icofont icofont-simple-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!--- END CONTAINER -->
	</section>
	<!-- END CONTACT SECTION -->