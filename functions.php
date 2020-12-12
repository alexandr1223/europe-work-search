<?php

add_action( 'wp_enqueue_scripts', 'work_add_styles' );
function work_add_styles() {
	// подключаем файл стилей темы
    wp_enqueue_style( 'style-main', get_stylesheet_uri() );
    wp_enqueue_style( 'normalize-style', get_template_directory_uri() .'/src/css/normalize.css');
    wp_enqueue_style( 'slick-style', get_template_directory_uri() .'/src/css/slick.css');
}

add_action( 'wp_enqueue_scripts', 'work_add_scripts' );
function work_add_scripts(){
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', false, null, true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'main-script', get_template_directory_uri() .'/src/js/script.js', array(), '1.0', true );
    wp_enqueue_script( 'libs-script', get_template_directory_uri() .'/src/js/libs.min.js', array(), '1.0', true );
    wp_enqueue_script( 'slick-script', get_template_directory_uri() .'/src/js/slick.min.js', array(), '1.0', true );
    wp_enqueue_script( 'wow-script', get_template_directory_uri() .'/src/js/wow.min.js', array(), '1.0', true );

}

?>