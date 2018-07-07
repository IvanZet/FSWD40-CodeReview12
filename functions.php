<?php 
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//Theme Support
function wpb_theme_setup(){
	add_theme_support('post-thumbnails');//??? Delete?
	// Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));
}
add_action('after_setup_theme','wpb_theme_setup');

?>