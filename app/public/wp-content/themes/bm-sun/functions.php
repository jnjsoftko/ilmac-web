<?php

function bm_sun_setup() {
  wp_enqueue_style( 'bm-sun-style', get_stylesheet_uri() );
  wp_enqueue_style( 'bm-sun-main-style', get_theme_file_uri("/assets/css/page-main.css") );
  // wp_enqueue_style( 'bm-sun-style', get_stylesheet_uri() );

  // "https://www.sun9jo.co.kr/assets/home/css/page-main.css"
}

add_action( 'wp_enqueue_scripts', 'bm_sun_setup' );