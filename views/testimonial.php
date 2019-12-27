    <!-- START TESTIMONIAL SECTION -->
    <section id="testimonial" class="section-padding">
		<div class="auto-container">
			<div class="row">
                <?php $i=1;
                    foreach($testimonial as $name => $review) { ?>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-5">
					<div class="single-testimonial">
						<div class="single-testimonial-img">
                            <img class="img-fluid" src="<?php echo $testi_path.$pg_key.'-'.$i.'.jpg'; ?>" 
                            alt="<?php echo $pg_key; ?>">
						</div>
						<div class="single-testimonial-text-warp">
							<div class="single-testimonial-text-inner">
								<p><?php echo $review; ?></p>
								<footer class="blockquote-footer"><?php echo $name; ?></footer>
							</div>
							<div class="single-testimonial-text-icon">
								<i class="icofont icofont-quote-left"></i>
							</div>
						</div>
					</div>
                </div>
                <?php $i++; } ?>
			</div>
		</div>
		<!--- END CONTAINER -->
	</section>
	<!-- END TESTIMONIAL SECTION -->