<style>
.spann {
	font-size : 18px;
}
</style>

	<!-- START VIDEO & FAQ -->
	<section id="videofaq" class="section-padding">
		<div class="container">
			<div class="row">
				<div
					class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
					<div class="text-left">
						<div class="section-title section-title-left">
							<h3>About <span class="spann">Surgical Gastro Enterologist</span></h3>
							<span class="line"></span>
						</div>
					</div>
					<h6><strong>Dr. Senthil Ganesan</strong></h6>
					<p>Dr.Senthil Ganesan completed his MBBS from Thanjavur medical college, Thanjavur. 
						He has completed general surgery training from All India Institute Of Medical Sciences 
						New Delhi in 2008. He has completed MCh Surgical Gastroenterology Sanjay Gandhi Postgraduate 
						Institute Of Medical Sciences Lucknow IN 2013. His areas of interest in hepatobiliary 
						surgery and minimal access surgery.</p> <br /> 
					<h6>Educational Details</h6>
					<p><strong>Medical School & Fellowships</strong></p>
					<p>MBBS - Thanjavur medical college, Thanjavur.</p>
					<p>MS - General Surgery - All India Institute Of Medical Sciences, New Delhi</p>
					<p>MCh - Surgical Gastroenterology - Sanjay Gandhi Postgraduate 
						Institute Of Medical Sciences, Lucknow</p>
					<p><strong>Memberships</strong></p>
					<p>Member - Association of surgeons of india</p>
					<p>Member - Association of Minimal Access surgeons of india</p>
				</div>
				<!-- end col -->
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="text-left">
						<div class="section-title section-title-left">
							<h3>Dr.Senthil Ganesan <span class="spann">MS, Mch[SGE].</span></h3>
							<span class="line"></span>
						</div>
					</div>
					<!-- end section title -->
					<div class="youtube-promo-video-wrap">
						<div class="youtube-promo-video-img">
							<img class="img-fluid" src="assets/img/dr-senthil.jpg" alt="">
						</div>
						
					</div>
				</div>
				<!-- end col -->
			</div>
		</div>
		<!--- END CONTAINER -->
	</section>
	<!-- END VIDEO & FAQ -->

	<?php $page->counter(); ?> 

	<!-- START TESTIMONIAL -->
	<section id="testimonialfaq" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 text-center mx-auto">
					<div class="section-title">
						<h3>What Our<span> Patients Says</span></h3>
						<span class="line"></span>
					</div>
				</div>
				<!-- end section title -->
			</div>
			<div class="row">
				<?php $i = 1;
				foreach($testi_slice as $k => $v) { ?>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
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
				</div>
				<?php $i++; } ?>
				<!-- end single testimonial -->
			</div>
		</div>
		<!--- END CONTAINER -->
	</section>
	<!-- END TESTIMONIAL -->