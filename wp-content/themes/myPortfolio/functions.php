<?php

function my_enqueue_scripts(){
  wp_enqueue_script('jquery');
  wp_enqueue_script('my_jQuery',get_template_directory_uri().'/assets/js/common.js',array());

  wp_enqueue_style('my_reset',get_template_directory_uri().'/assets/css/reset.css',array());
  wp_enqueue_style('my_styles',get_template_directory_uri().'/assets/css/style.css',array());
}


function wp_activeFunction(){
  add_theme_support('post-thumbnails');

  register_nav_menus(
    array(
      'place_global' => 'グローバル',
    )
  );
}

function wp_fook(){
  add_action('wp_enqueue_scripts','my_enqueue_scripts');
}

function init(){
  wp_activeFunction();
  wp_fook();
}

init();