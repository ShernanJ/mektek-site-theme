<?php

function load_stylesheets()
{
  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function loadjs()
{
  wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), 1, false);
  wp_script_add_data('customjs', 'async', true);
}
add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');

add_theme_support('post-thumbnails');

register_nav_menus(

  array(
    'top_menu' => __('Top Menu', 'theme'),
    'mobile_menu' => __('Mobile Menu', 'wdm')
  )

);
