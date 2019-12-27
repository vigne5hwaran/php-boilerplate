    <!-- START ERROR SECTION -->
    <section id="error" class="section-padding">
		<div class="auto-container">
			<div class="error-page-top">
				<div class="row">
					<div class="col-lg-8 mx-auto text-center">
						<h2>Oops!</h2>
						<span>404</span>
						<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.
						</p>
						<a class="header-quote-btn" href="home">Go Home <i class="icofont icofont-caret-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!--- END CONTAINER -->
	</section>
	<!-- END ERROR SECTION -->


	<!-- START ERROR SECTION TWO -->
	<section id="error2" class="section-padding bg-gray">
		<div class="auto-container">
			<div class="row">
				<div class="col-lg-7 text-center mx-auto">
					<div class="section-title">
						<h3>Most Useful Links</h3>
						<span class="line"></span>
						<p>It looks like nothing was found at this location. Maybe try one of the links below or a
							search?</p>
					</div>
				</div>
				<!-- end section title -->
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12 mb-lg-0 mb-md-4 mb-4">
					<div class="sidebar-widget">
						<!-- end widget tittle-->
						<div class="servide-list">
							<ul>
							<?php foreach($services_cone as $k => $v) {?>
								<li><a href="<?php echo $k; ?>"><i class="icofont icofont-rounded-right"></i>
								<?php echo $v; ?></a> </li>
							<?php } ?>
							</ul>
						</div>
					</div>
				</div>
				<!-- end col -->
				<div class="col-lg-4 col-md-6 col-12 mb-lg-0 mb-md-4 mb-4">
					<div class="sidebar-widget">
						<!-- end widget tittle-->
						<div class="servide-list">
							<ul>
							<?php foreach($services_ctwo as $k => $v) {?>
								<li><a href="<?php echo $k; ?>"><i class="icofont icofont-rounded-right"></i>
								<?php echo $v; ?></a> </li>
							<?php } ?>
							</ul>
						</div>
					</div>
				</div>
				<!-- end col -->
				<div class="col-lg-4 col-md-12 col-12">
					<div class="sidebar-widget">
						<!-- end widget tittle-->
						<div class="servide-list">
							<ul>
							<?php foreach($services_cthr as $k => $v) {?>
								<li><a href="<?php echo $k; ?>"><i class="icofont icofont-rounded-right"></i>
								<?php echo $v; ?></a> </li>
							<?php } ?>
							</ul>
						</div>
					</div>
				</div>
				<!-- end col -->
			</div>
		</div>
		<!--- END CONTAINER -->
	</section>
	<!-- END ERROR SECTION TWO -->