<?php

function readAssets(){
  // wp_enqueue_script('jquery');
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.14', true);
  wp_enqueue_script('my_jQuery',get_template_directory_uri().'/assets/js/common.js', array('jquery'), true);

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

function subLoop ($number = -1,$paged = ""){
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => $number,
    'no_found_rows' => false,
    'paged' => $paged,
  );

  $the_query = new WP_Query($args);
  return $the_query;
}

function limitContent($post,$limit){
  $mbStrength = mb_strlen($post->post_content);

  if($mbStrength > $limit) {
    $content= mb_substr(strip_tags($post->post_content),0,$limit) ;
    echo $content. '…' ;
  } else {
    echo str_replace('\n', '', strip_tags($post->post_content));
  }
}

function wp_fook(){
  add_action('wp_enqueue_scripts','readAssets');
  remove_filter('the_content', 'wpautop');
  remove_filter('the_excerpt', 'wpautop');
}

function init(){
  wp_activeFunction();
  wp_fook();
}

init();