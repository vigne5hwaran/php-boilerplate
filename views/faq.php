    <!-- START FAQ SECTION -->
    <section id="faq" class="section-padding">
		<div class="auto-container">
			<div class="row">
				<div class="col-lg-7 text-center mx-auto">
					<div class="section-title">
						<h3>Frequently Asked Question</h3>   
						<span class="line"></span>
					</div>
				</div>
				<!-- end section title -->
			</div>
			<div class="row mb-5">
				<div
					class="col-lg-12 col-md-12 col-sm-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-2 mb-2">
					<div class="panel-group faq-home-accor" id="accordion">
						<?php $i = 1;
							foreach($faq as $k => $v){ ?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h5 class="panel-title">
									<i class="icofont icofont-thin-down"></i> <a class="accordion-toggle"
										data-toggle="collapse" data-parent="#accordion" href="#panel<?php echo $i; ?>">
										<?php echo $k; ?></a>
								</h5>
							</div>
							<div id="panel<?php echo $i; ?>" class="panel-collapse collapse <?php echo ($i==1)?'show':''; ?>">
								<div class="panel-body">
									<p><?php echo $v; ?></p>
								</div>
							</div>
						</div>
						<?php $i++; } ?>
					</div>
				</div>
			</div>
			<hr>
			<div class="row mt-5">
				<div class="col-lg-7 text-center mx-auto section-title-faq">
					<div class="section-title">
						<h3>Still no luck? We can help!</h3>
						<span class="line"></span>
						<a class="submit-req-btn" href="contact">Submit a request</a>
						<p>Contact us and we’ll get back to you as soon as possible.</p>
					</div>
				</div>
				<!-- end section title -->
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 border p-3 wow fadeInLeft">
					<div class="single-support">
						<div class="single-support-icon custom-color-1">
							<i class="icofont icofont-envelope"></i>
						</div>
						<div class="single-support-info">
							<h5>Find Us On Email</h5>
							<p>Send your queries at our mail <a href="mailto:jeeyes1@gmail.com">jeeyes1@gmail.com</a> and we will
							get back to you soon.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 border p-3 wow fadeInRight">
					<div class="single-support">
						<div class="single-support-icon custom-color-2">
							<i class="icofont icofont-social-twitter"></i>
						</div>
						<div class="single-support-info">
							<h5>Find Us On Twitter</h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
								tincidunt ut laoreet.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--- END CONTAINER -->
	</section>
	<!-- END FAQ SECTION -->