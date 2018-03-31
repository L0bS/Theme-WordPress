<?php

function cs_theme_styles()
{
   wp_enqueue_style('theme.css', get_template_directory_uri().'/assets/css/style.css');
   wp_enqueue_script('theme.js', get_template_directory_uri().'/assets/js/script.js', array ('jquery'), '',TRUE);
}

function cs_after_setup()
{
    add_theme_support('menus');
    register_nav_menu('primary', __('Primary Menu', 'primeirotema'));
}
function cs_sidebar()
{
    register_sidebar(array(
       'name' => __('Sidebar', 'primeirotema'),
        'id' => 'cs_sidebar',
        'description' => __('Sidebar para o tema', 'primeirotema')
    ));
}
?>