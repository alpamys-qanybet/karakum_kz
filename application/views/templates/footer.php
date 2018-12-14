
	<!--=== Footer v4 ===-->
	<div class="footer-v4">
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p class="thumb-headline" style="margin-top: 13px;">
							{{'footer.slogan' | i18next}}
						</p>
						<ul class="list-unstyled address-list" style="margin-top: 14px;">
							<li><i class="fa fa-angle-right"></i>{{'page.contact.address.republic' | i18next}}, {{'page.contact.address.post' | i18next}}</li>
							<li><i class="fa fa-angle-right"></i>{{'page.contact.address.region' | i18next}}, {{'page.contact.address.city' | i18next}}</li>
							<li><i class="fa fa-angle-right"></i>{{'page.contact.address.street' | i18next}}, {{'page.contact.address.building' | i18next}}</li>
							<li><i class="fa fa-angle-right"></i>{{'page.contact.telephone' | i18next}}</li>
							<li><i class="fa fa-angle-right"></i>{{'page.contact.email' | i18next}}</li>
						</ul>
					</div>
					
					<div class="col-md-4">
						<div class="row">
							<div class="col-sm-12 col-xs-6">
								<h2 class="thumb-headline">
									<a href="<?php echo base_url('/certificate'); ?>">{{'nav.certificate' | i18next}}</a>
								</h2>
								<ul class="list-unstyled simple-list">
									<li ng-if="$cookies.get('lng') == 'en'" ng-repeat="cert in certificates['en']">
										<span>{{cert.name}}</span>
									</li>

									<li ng-if="$cookies.get('lng') == 'ru'" ng-repeat="cert in certificates['ru']">
										<span>{{cert.name}}</span>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-sm-12 col-xs-6">
								<h2 class="thumb-headline">
									<a href="<?php echo base_url('/equipment'); ?>">{{'nav.equipment' | i18next}}</a>
								</h2>
								<ul class="list-unstyled simple-list">
									<li ng-repeat="eq in equipments">
										<span>
											{{eq.product}} -
											<span ng-if="$cookies.get('lng') == 'en'">{{eq.titleEn}}</span>
											<span ng-if="$cookies.get('lng') == 'ru'">{{eq.titleRu}}</span>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/footer-->
	</div>
	<!--=== End Footer v4 ===-->
</div><!--/wrapper-->

<!-- JS Customization -->
<script src="<?php echo base_url('static/index_files/custom.js'); ?>"></script>
<!-- JS Page Level -->
<script src="<?php echo base_url('static/index_files/shop.js'); ?>"></script>
<!--script src="<?php #echo base_url('static/index_files/owl-carousel.js'); ?>"></script-->
<!--script src="<?php #echo base_url('static/index_files/revolution-slider.js'); ?>"></script-->

<script type="text/javascript" src="<?php echo base_url('static/assets/plugins/parallax-slider/js/modernizr.js"'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/assets/plugins/parallax-slider/js/jquery.cslider.js"'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/assets/js/plugins/parallax-slider.js"'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('static/lib/jquery.laziestloader.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/lib/jquery.mousewheel-3.0.6.pack.js'); ?>"></script>
<!--script type="text/javascript" src="<?php #echo base_url('static/lib/owl-carousel/owl.carousel.min.js'); ?>"></script-->
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<!-- <script type="text/javascript" src="<?php #echo base_url('static/lib/slick-1.8.1/slick/slick.min.js'); ?>"></script> -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<!-- script type="text/javascript" src="<?php #echo base_url('static/lib/bxslider-4-4.2.12/jquery.bxslider.min.js'); ?>"></script-->

<!-- script type="text/javascript" src="<?php #echo base_url('static/lib/light-slider/js/lightslider.js'); ?>"></script-->

<script type="text/javascript" src="<?php echo base_url('static/lib/flex-slider/jquery.flexslider-min.js'); ?>"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="<?php echo base_url('static/lib/fancybox/jquery.fancybox.js?v=2.1.5'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/fancybox/jquery.fancybox.css?v=2.1.5'); ?>" media="screen" />

<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5'); ?>" />
<script type="text/javascript" src="<?php echo base_url('static/lib/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5'); ?>"></script>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7'); ?>" />
<script type="text/javascript" src="<?php echo base_url('static/lib/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7'); ?>"></script>

<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="<?php echo base_url('static/lib/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6'); ?>"></script>

<script>
	jQuery(document).ready(function() {
		App.init();
		App.initScrollBar();
		App.initParallaxBg();
		// OwlCarousel.initOwlCarousel();
		// RevolutionSlider.initRSfullWidth();
		// ParallaxSlider.initParallaxSlider();

		$('.lazy').laziestloader({
			threshold: 400
		});

		$('.fancybox-buttons').fancybox({
			autoSize: true,
			width: 1200,

			openEffect: 'fade',
			closeEffect: 'fade',
			nextEffect: 'fade',
			prevEffect: 'fade',

			closeBtn  : false,

			helpers : {
				title : {
					type : 'inside'
				},
				buttons : {}
			}
		});

		// $('.alp-slick-class').slick({
		// 	dots: false,

		// 	infinite: true,
		// 	// speed: 500,

		// 	autoplay: true,
  // 			autoplaySpeed: 1000 * 2.3,

  // 			centerMode: true,

		// 	fade: true,
		// 	cssEase: 'linear'
		// });

		// $('.alp-bxslider-class').bxSlider({
		// 	mode: 'fade',
		// 	captions: true,
		// 	pager: true,
  // 			slideWidth: screen.width,
		// });

		// $('#imageGallery').lightSlider({
		// 	auto:true,
	 //        loop:true,
	 //        pauseOnHover: true,

	 //        // gallery:true,
	 //        item:1,
	 //        // loop:true,
	 //        // thumbItem:9,
	 //        // slideMargin:0,
	 //        slideWidth: screen.width,
  //       	// enableDrag: false,
	 //        // currentPagerPosition:'left',
	 //        // onSliderLoad: function(el) {
	 //        //     el.lightGallery({
	 //        //         selector: '#imageGallery .lslide'
	 //        //     });
	 //        // }   
	 //    });

		$('.flexslider').flexslider({
			animation: "fade",
			// easing: "swing",
			animationLoop: true,
			slideshow: true,
			slideshowSpeed: 1000 * 2.3,
			animationSpeed: 600,
			pauseOnHover: true,
			directionNav: false,
		});
	});
</script>

<script type='text/javascript' src='<?php echo base_url('static/lib/angular/angular.min.js'); ?>'></script>
<script type='text/javascript' src='<?php echo base_url('static/lib/ui-router/angular-ui-router.min.0.2.18.js'); ?>'></script>
<script type='text/javascript' src='<?php echo base_url('static/lib/angular/angular-cookies.min.js'); ?>'></script>
<script type='text/javascript' src='<?php echo base_url('static/lib/angular/angular-sanitize.min.js'); ?>'></script>

<script type="text/javascript" src="<?php echo base_url('static/lib/underscore/underscore-min.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('static/lib/i18next/i18next-1.7.4.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/lib/ng-i18next/ng-i18next.min.0.5.2.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('static/scripts/app.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('static/scripts/services/locales.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/main.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/about.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/certificate.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/contact.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/equipment.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/policy.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/service.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/technology.js'); ?>"></script>

		<div title="" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;" id="topcontrol"></div>
	</body>
</html>