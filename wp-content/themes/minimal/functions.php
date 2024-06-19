<?php

/* 변수 등록 */
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT.'/images');
define('JS', THEMEROOT.'/js');

if(!function_exists('minimal_script')){  
  function minimal_script(){  
    /* CSS 로드 */
    wp_enqueue_style('common-css',THEMEROOT.'/css/common.css');
    wp_enqueue_style('bootstrap-grid',THEMEROOT.'/css/bootstrap-grid.min.css');
    wp_enqueue_style('default',THEMEROOT.'/css/default.css');
    wp_enqueue_style('responsive',THEMEROOT.'/css/responsive.css');

    /* 스크립트 등록 */
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', '', '', true );
    wp_register_script( 'main-js', JS.'/main.js', array('jquery'), false, true );
    
    /* 스크립트 로드 */
    wp_enqueue_script('jquery');
    wp_enqueue_script('main-js');
    
  }
  add_action( 'wp_enqueue_scripts', 'minimal_script');
}

// 메뉴 기능 추가
function register_my_menus() {
  register_nav_menu('minimal-menu', __( 'Minimal Menu'));
 }
 add_action( 'init', 'register_my_menus' );

 // 특성 이미지 기능 추가
 add_theme_support( 'post-thumbnails' );
