<?php
 require get_template_directory().'/include/setup.php';
 
add_action('wp_enqueue_scripts', 'cs_theme_styles');
add_action('after_setup_theme', 'cs_after_setup');
add_action('widgets_init', 'cs_sidebar');
?>