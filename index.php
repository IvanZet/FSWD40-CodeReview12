			<?php get_header(); ?>

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-9">

						<!-- row -->
						<div class="row">

							<!-- single blog -->
							<?php if(have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<div class="col-md-6">
										<div class="single-blog">
											<div class="blog-img">
												<a href="<?php the_permalink(); ?>">
													<img src="<?php the_post_thumbnail_url(); ?>" alt="">
												</a>
											</div>
											<h4>
												<a href="<?php the_permalink(); ?>">
                    			<?php the_title(); ?>
                  			</a>
                  		</h4>
											<div class="blog-meta">
												<span class="blog-meta-author">By:
													<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
														<?php the_author(); ?>
                  				</a>
                  			</span>
												<div class="pull-right">
													<span><?php the_time('j F Y G:i'); ?></span>
													<span class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i><?php comments_number(); ?></a></span>
												</div>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
							<?php else : ?>
           			<p><?php __('No Posts Found'); ?></p>
							<?php endif; ?>
							<!-- /single blog <--></-->

						</div>
						<!-- /row -->

						<!-- row -->
						<!-- <div class="row">
						
							pagination
							<div class="col-md-12">
								<div class="post-pagination">
									<a href="#" class="pagination-back pull-left">Back</a>
									<ul class="pages">
										<li class="active">1</li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
									</ul>
									<a href="#" class="pagination-next pull-right">Next</a>
								</div>
							</div>
							pagination
						
						</div> -->
						<!-- /row -->
					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					<div id="aside" class="col-md-3">

						<!-- category widget -->
						<div class="widget category-widget">
							<h3>Categories</h3>
							<a class="category" href="#">Web <span>12</span></a>
							<a class="category" href="#">Css <span>5</span></a>
							<a class="category" href="#">Wordpress <span>24</span></a>
							<a class="category" href="#">Html <span>78</span></a>
							<a class="category" href="#">Business <span>36</span></a>
						</div>
						<!-- /category widget -->

					</div>
					<!-- /aside blog -->

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

			<?php get_footer(); ?>