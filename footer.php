<!-- aside blog -->
					<div id="aside" class="col-md-3">

						<!-- category widget -->
						<?php if (is_active_sidebar('sidebar')) : ?>
            	<?php dynamic_sidebar('sidebar'); ?>
          	<?php endif; ?>
						<!-- /category widget -->
					</div>
					<!-- /aside blog -->

					<!--Add classes to cattegory items-->
					<script type="text/javascript">
						var x = document.querySelectorAll(".category-widget a");
				    var i;
				    for (i = 0; i < x.length; i++) {
				        x[i].setAttribute("class", "category");
				    }
					</script>

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog -->

<!-- Footer -->
<footer id="footer" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<!-- footer logo -->
			<div class="col-md-6">
				<div class="footer-logo">
					<a class="logo" href="index.html">
						<img src="<?php bloginfo('template_url'); ?>/img/logo2.png" alt="logo">
					</a>
				</div>
			</div>
			<!-- footer logo -->

		</div>
		<!-- /row -->

		<!-- row -->
		<div id="bottom-footer" class="row">

			<!-- copyright -->
			<div class="col-md-12">
				<div class="footer-copyright">
					<span>&copy; Copyright 2018. All Rights Reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com">Colorlib</a></span>
				</div>
			</div>
			<!-- /copyright -->

		</div>
		<!-- row -->

	</div>
	<!-- /container -->
</footer>
		<?php wp_footer(); ?>
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

	</body>
</html>
