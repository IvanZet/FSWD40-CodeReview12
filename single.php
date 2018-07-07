		<?php get_header(); ?>
		
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<?php if(have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<div class="col-md-10 col-md-offset-1 text-center">
						<!-- <ul class="hero-area-tree">
							<li><a href="index.html">Home</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li>How to Get Started in Photography</li>
						</ul> -->
						<h1 class="white-text"><?php the_title(); ?></h1>
						<ul class="blog-post-meta">
							<li class="blog-meta-author">By :
								<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?>
                 </a></li>
							<li><?php the_time('j F Y G:i'); ?></li>
							<li class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i><?php comments_number(); ?></a></li>
						</ul>
					</div>
					<?php endwhile; ?>
					<?php else : ?>
       			<p><?php __('No Posts Found'); ?></p>
					<?php endif; ?>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Blog -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					
					<!-- main blog -->
					<div id="main" class="col-md-9">
						
						<?php if(have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						<!-- blog post -->
						<div class="blog-post">
							<?php the_content(); ?>
						</div>
						<!-- /blog post -->

						<!-- blog comments -->
						<div class="blog-comments">
							<h3><?php comments_number(); ?> Comments</h3>

							<!-- single comment -->
							<div class="media">
								<div class="media-left">
									<img src="./img/avatar.png" alt="">
								</div>
								<div class="media-body">
									<h4 class="media-heading">John Doe</h4>
									<p>Cu his iudico appareat ullamcorper, at mea ignota nostrum. Nonumy argumentum id cum, eos adversarium contentiones id</p>
									<div class="date-reply"><span>Oct 18, 2017 - 4:00AM</span><a href="#" class="reply">Reply</a></div>
								</div>

								<!-- comment reply -->
								<div class="media">
									<div class="media-left">
										<img src="./img/avatar.png" alt="">
									</div>
									<div class="media-body">
										<h4 class="media-heading">John Doe</h4>
										<p>Cu his iudico appareat ullamcorper, at mea ignota nostrum. Nonumy argumentum id cum, eos adversarium contentiones id</p>
										<div class="date-reply"><span>Oct 18, 2017 - 4:00AM</span><a href="#" class="reply">Reply</a></div>
									</div>
								</div>
								<!-- /comment reply -->

								<!-- comment reply -->
								<div class="media">
									<div class="media-left">
										<img src="./img/avatar.png" alt="">
									</div>
									<div class="media-body">
										<h4 class="media-heading">John Doe</h4>
										<p>Cu his iudico appareat ullamcorper, at mea ignota nostrum. Nonumy argumentum id cum, eos adversarium contentiones id</p>
										<div class="date-reply"><span>Oct 18, 2017 - 4:00AM</span><a href="#" class="reply">Reply</a></div>
									</div>
								</div>
								<!-- /comment reply -->

							</div>
							<!-- /single comment -->

							<!-- single comment -->
							<div class="media">
								<div class="media-left">
									<img src="./img/avatar.png" alt="">
								</div>
								<div class="media-body">
									<h4 class="media-heading">John Doe</h4>
									<p>Cu his iudico appareat ullamcorper, at mea ignota nostrum. Nonumy argumentum id cum, eos adversarium contentiones id</p>
									<div class="date-reply"><span>Oct 18, 2017 - 4:00AM</span><a href="#" class="reply">Reply</a></div>
								</div>
							</div>
							<!-- /single comment -->

							<!-- blog reply form -->
							<div class="blog-reply-form">
								<h3>Leave Comment</h3>
								<form>
									<input class="input name-input" type="text" name="name" placeholder="Name">
									<input class="input email-input" type="email" name="email" placeholder="Email">
									<textarea class="input" name="message" placeholder="Enter your Message"></textarea>
									<button class="main-button icon-button">Submit</button>
								</form>
							</div>
							<!-- /blog reply form -->

						</div>
						<!-- /blog comments -->
						<?php endwhile; ?>
						<?php endif; ?>
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

		<?php get_footer(); ?>