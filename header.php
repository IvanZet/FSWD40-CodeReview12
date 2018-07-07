<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta <?php bloginfo('charset'); ?>>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title><?php bloginfo('name'); ?></title>
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css"/>
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
		<?php wp_head(); ?>
    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.html">
							<img src="<?php bloginfo('template_url'); ?>/img/logo2.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<!-- Navigation -->
				<nav id="nav">
						<?php 
						wp_nav_menu( array(
							'theme_location'  => 'primary',
							'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'bs-example-navbar-collapse-1',
							'menu_class'      => 'navbar-nav mr-auto',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						));
						?>
				</nav>
				<!-- /Navigation -->

				<!--Update naviigation menu class-->
				<script type="text/javascript">
					document.getElementById("menu-main-menu").className = "navbar-nav mr-auto main-menu nav navbar-right";
				</script>
				<!--/Update naviigation menu class-->

			</div>
		</header>
		<!-- /Header -->
