			<?php get_header(); ?>
		<!-- Blog -->
		<div id="blog" class="section">
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

		<?php get_footer(); ?>