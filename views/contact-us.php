
	<?php include_once('includes/header.php')?>

<!-- main-banner -->
<section class="main-banner-home two-d-service-banner contact-bnr">
	<?php include_once('includes/social-list.php')?>
	<div class="container">
		<div class="c-hero">
			
			<div class="c-hero_video">
				<!--   <video autoplay="" muted="" loop="" playsinline="" class="a-fadeIn js-heroVideo -animated js-lazy">
					<source data-src="assets/video/2.mp4" data-mobile-src="/media/116/download/480p_Panattoni_Underwater_10s_WEBSITE_MOBILE_9x16.mp4?v=1" type="video/mp4" src="assets/video/2.mp4">
				</video> -->
				<div class="2d-animation-img" data-parallax='{"x": -200}'>
					<img src="assets/images/contact-bnr.png">
				</div>
			</div>
		</div>
		<div class="row">
			<!--  <a href="assets/video/2.mp4" class="fancybox" data-fancybox="gallery" tabindex="0" type="video/mp4">
				<img src="assets/images/play-btn-showreel.png" class="play-btn-showreel-1">
			</a>-->
			<!-- <img src="assets/images/banner-img-1.png" class="banner-img-1"> -->
			<div class="col-md-12">
				<div class="main-banner-head inner-banner-head">
					<div class="logo wow fadeInUp" data-wow-duration="1s">
						<!-- <img src="assets/images/logo.png"> -->
					</div>
					<!-- <h6>Convey Your Messages Artistically Through
					</h6> -->
					<h3 class="wow fadeInUp" data-wow-duration="1s">Get in Touch with Meta Pixels Inc.</h3>
					<!-- <h4 class="wow fadeInUp" data-wow-duration="2s">Services By Experts
					</h4> -->
					<p class="wow fadeInUp" data-wow-duration="2s">When you reach out to Meta Pixels Inc., you're taking the initial stride toward realizing your digital aspirations. We're genuinely enthusiastic about hearing from you. Whether you seek answers, require assistance, or wish to explore your digital dreams, our team is here to offer the guidance you seek. Don't hesitate; to make contact today, and let's embark together on a journey filled with collaboration, innovation, and triumph in the digital world. 
					</p>
					<a href="javascript:;" class="popup-btn
						wow fadeInUp" data-wow-duration="2s"><!-- <i><img src="assets/images/mini-logo.png"></i> -->Start Your Project</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- main-banner -->
	<section class="contact-form">
		<div class="container">
			<div class="row">
				<div class="col-md-6 my-auto">
					<h2>Our Teams Are Here To Help.</h2>
					<h6>Call <strong> +1 302 202 0992</strong>  or drop us a line for further inquiries. </h6>
					<p>Have a question or an exciting project on your mind? Feel free to share it with us by completing the form below. We're here and eager to assist you!</p>
				</div>
				<div class="col-md-5 ">
					<div class="form-wrap">
						<form action="/email/form-handler" method="POST">
							<div class="row">
								<div class="col-md-6">
									<span class="input-field"><input type="text" placeholder="Name" name="cn" class="required" required=""></span>
								</div>
								<div class="col-md-6">
									<span class="input-field"><input type="email" name="em" class="required email" placeholder="Enter your email here" required="" /></span>
								</div>
								<div class="col-md-12">
									<span class="input-field">
										<input type="number" name="pn" id="phone" class="number required" placeholder="Phone Number" required="" />
									</span>
								</div>
								
								<div class="col-md-12">
									<span class="input-field textarea"><textarea name="msg" placeholder="Write a message"></textarea></span>
								</div>
								<div class="col-md-12">
									<button type="submit">Submit Now </button>
									<input type="hidden" id="lead_area_popup1" name="lead_area" value="for $99">
									<input type="hidden" id="lead_org_price" name="lead_org_price" value="99">
									<input type="hidden" name="send" value="1">
									<input type="hidden" name="service_id" value="5672" class="service_id">
									<input type="hidden" name="lb_source" value="" />
									<input type="hidden" name="lb_source_cat" value="" />
									<input type="hidden" name="lb_source_nam" value="" />
									<input type="hidden" name="lb_source_ema" value="" />
									<input type="hidden" name="lb_source_con" value="" />
									<input type="hidden" name="lb_source_pho" value="" />
									<input type="hidden" name="lb_source_off" value="" />
									<input type="hidden" name="fullpageurl" value="" />
									<input type="hidden" name="pageurl" value="" />
									<input type="hidden" name="ip2loc_ip" value="" />
									<input type="hidden" name="ip2loc_isp" value="" />
									<input type="hidden" name="ip2loc_org" value="" />
									<input type="hidden" name="ip2loc_country" value="" />
									<input type="hidden" name="ip2loc_region" value="" />
								</div>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'inner-cta-sec.php';?>

	<section class="inner-brands-sec">
<?php include 'brands-logos.php';?>
</section>
<!-- brands-logos -->
<!-- testi-sec -->
<section class="inner-testi-sec">
<?php include 'testi-sec.php';?>
</section>
<!-- testi-sec -->
<!-- footer -->
<?php include_once('includes/footer.php')?>
<!-- footer