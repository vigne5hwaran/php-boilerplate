    <!-- START SLIDER SECTION -->
    <section class="slider-section">
		<div class="home-slides owl-carousel owl-theme ">
			<div class="home-single-slide" data-background="assets/img/bg/slide6.jpg">
				<div class="home-slide-overlay"></div>
				<div class="home-single-slide-inner">
					<div class="auto-container">
						<div class="row">
							<div class="col-lg-7 col-md-8 col-sm-8 col-12">
								<div class="home-single-slide-dec">
									<p>WE CARE</p>
									<h2>ABOUT YOUR</h2>
									<h2 class="banner-h">GASTRO PROBLEMS</h2><br />
									<a href="contact" class="home-btn-1">GET APPOINTMENT</a>
									<a href="about" class="home-btn-2">ABOUT US</a>
								</div>
							</div>
							<div class="col-lg-5 col-md-4 col-sm-4 col-12 d-lg-block d-md-block d-sm-block d-none">
								<!-- <img class="img-fluid" src="assets/img/bg/single-doc1.png" alt="" /> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end single slider -->
			<div class="home-single-slide" data-background="assets/img/bg/slide7.jpg">
				<div class="home-slide-overlay"></div>
				<div class="home-single-slide-inner">
					<div class="auto-container">
						<div class="row">
							<div class="col-lg-7 col-md-8 col-sm-8 col-12">
								<div class="home-single-slide-dec">
									<p>WE</p>
									<h2>PROVIDING</h2>
									<h2 class="banner-h">QUALITY HEALTH CARE</h2>
									<span></span>
									<a href="about" class="home-btn-1">ABOUT US</a>
									<a href="contact" class="home-btn-2">CONTACT US</a>
								</div>
							</div>
							<div class="col-lg-5 col-md-4 col-sm-4 col-12 d-lg-block d-md-block d-sm-block d-none">
								<!-- <img class="home-single-slide--img img-fluid" src="assets/img/bg/single-doc2.png"
									alt="" /> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end single slider -->
		</div>
	</section>
	<!-- END SLIDER SECTION  -->

	<!-- START ABOUT SECTION -->
	<section id="about" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 text-center mx-auto">
					<div class="section-title">
						<h3>Welcome to <span>AMBE Clinic</span></h3>
						<span class="line"></span>
						<p>Ambe Gastro Clinic is one of the few institutions specialised in addressing the various ailments of the 
							digestive tract. It is also one of the Gastro Cares in Chennai to have brought about relief in 
							multitudes, to many, suffering from gastro problems. Find the best integrated care, effective 
							cure and empathetic guidance towards recovery and regaining good health – all at one place 
							from the top gastroenterologist in Chromepet, Chennai.</p>
					</div>
				</div>
				<!-- end section title -->
			</div>
			<div class="row text-center">
				<div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
					<div class="single-about">
						<div class="single-about-icon">
							<img class="img-fluid" src="assets/img/bg/icon-2.png" alt="" />
						</div>
						<h5>Our Mission</h5>
						<p>To deliver international class healthcare with customer centric focus, committed to highest standards of professional excellence.</p>
					</div>
				</div>
				<!-- end single about -->
				<div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
					<div class="single-about">
						<div class="single-about-icon">
							<img class="img-fluid" src="assets/img/bg/icon-1.png" alt="" />
						</div>
						<h5>Our History</h5>
						<p>Seven years of Experience in Surgical Gastroenterology and have done several major operations in Chennai</p>
					</div>
				</div>
				<!-- end single about -->
				<div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
					<div class="single-about">
						<div class="single-about-icon">
							<img class="img-fluid" src="assets/img/bg/icon-4.png" alt="" />
						</div>
						<h5>Our Vision</h5>
						<p>To provide outstanding healthcare services with world class infrastructure, state-of-the-art technology and highly qualified staff.</p>
					</div>
				</div>
				<!-- end single about -->
				<div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
					<div class="single-about">
						<div class="single-about-icon">
							<img class="img-fluid" src="assets/img/bg/icon-3.png" alt="" />
						</div>
						<h5>Our Success</h5>
						<p>We aimed at comprehensive excellence in treatment, not only in terms of diagnosis or treatment but also in the overall care.</p>
					</div>
				</div>
				<!-- end single about -->
			</div>
		</div>
		<!--- END CONTAINER -->
	</section>
	<!-- END ABOUT SECTION -->

	<!-- START SERVICE SECTION -->
	<section id="services" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 text-center mx-auto">
					<div class="section-title">
						<h3>Our<span> Services</span></h3>
						<span class="line"></span>
						<p>Our clinic, apart from boasting the best gastro specialist also takes pride in leading the space 
							of laparoscopic surgery in Chennai. With the tool of technology in hand and profound expertise 
							in practice, the Ambe Gastro clinic is the go-to centre for finding practical care and assured 
							relief.</p>
					</div>
				</div>
				<!-- end section title -->
			</div>
			<div class="row mt-4">
				<div class="service-slider owl-carousel owl-theme">
					<?php foreach($services as $k => $v) { ?>
					<div class="single-service-item">
						<div class="single-service">
							<img class="img-fluid" src="<?php echo $img_path.$k; ?>.jpg" alt="<?php echo $v; ?>" />
							<h5><?php echo $v; ?></h5>
							<p><?php echo substr($services_data[$k], 0, 80); ?>...</p>
							<a class="serv-rmbtn" href="<?php echo $k; ?>">Read More</a>
						</div>
					</div>
					<?php } ?>
					<!-- end single service -->
				</div>
			</div>
		</div>
		<!--- END CONTAINER -->
	</section>
	<!-- END SERVICE SECTION -->

	<?php $page->counter(); ?>

	<!-- START TESTIMONIAL & FAQ -->
	<section id="testimonialfaq" class="section-padding">
		<div class="container">
			<div class="row">
				<div
					class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
					<div class="text-left">
						<div class="section-title section-title-left">
							<h3>Frequently <span>Asked Question</span></h3>
							<span class="line"></span>
						</div>
					</div>
					<!-- end section title -->
					<div class="panel-group faq-home-accor" id="accordion">
						<?php $i = 1;
							foreach($faq_slice as $k => $v) { ?>
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
				<!-- end col -->
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="text-left">
						<div class="section-title section-title-left">
							<h3>What Our <span>Patients Says </span></h3>
							<span class="line"></span>
						</div>
					</div>
					<!-- end section title -->
					<?php $i = 3;
					foreach($testi_2 as $k => $v) { ?>
					<div class="single-testimonial mb-4">
						<div class="single-testimonial-img">
							<img class="img-fluid" src="<?php echo $testi_path.'testimonial-'.$i; ?>.jpg" alt="Testimonial">
						</div>
						<div class="single-testimonial-text-warp">
							<div class="single-testimonial-text-inner">
								<p><?php echo $v; ?></p>
								<footer class="blockquote-footer"><?php echo $k; ?></footer>
							</div>
							<div class="single-testimonial-text-icon">
								<i class="icofont icofont-quote-left"></i>
							</div>
						</div>
					</div>
					<?php $i++; } ?>
					<!-- end single testimonial -->
				</div>
				<!-- end col -->
			</div>
		</div>
		<!--- END CONTAINER -->
	</section>
	<!-- END TESTIMONIAL & FAQ -->