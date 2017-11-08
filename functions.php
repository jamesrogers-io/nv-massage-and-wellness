<?php
// Theme Support
function nvmaw_theme_support() {

  // Nav Menu Areas
  register_nav_menus(array(
    'primary'    => __('Primary Menu'),
    'footer'     => __('Footer Menu')
  ));
  // Post Thumbnails
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'nvmaw_theme_support');

// Customizer Files
require get_template_directory().'./customizer.php';

// Installing jQuery
wp_enqueue_script("jquery");

