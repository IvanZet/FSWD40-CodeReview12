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

						<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<!-- /main blog -->

		<?php get_footer(); ?>