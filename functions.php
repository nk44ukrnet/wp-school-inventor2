<?php

function theme_files() {
	 //lightGallery:
    //wp_register_style('lightGalleryCss', 'https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css');
    //styles of gallery is in header.php
    wp_enqueue_script('lightGalleryJs', 'https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js', NULL, '1.0.0', true);
    //end of lightGallery
//    wp_enqueue_script('main-js', get_theme_file_uri('/js/inventor.js'), NULL, '1.0.59', true);
    wp_enqueue_script('main-js', get_theme_file_uri('/js/inventor.js'), NULL, filemtime(get_template_directory() . '/js/inventor.js'), true);
//    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/all.css', NULL, '1.0.64');
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/all.css', NULL, filemtime(get_template_directory() . '/css/all.css'), 'all');
    wp_enqueue_style( 'font-awesome-styles', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', NULL, '1', 'all');

    wp_enqueue_style('swiperjs-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', null, '1', 'all');
    wp_enqueue_script('swiperjs-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', null,'1', false);

    wp_enqueue_style('inv-styles', get_stylesheet_uri() , NULL, '1.0.38');
    wp_localize_script('main-university-js', 'universityData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
    ));
    if( is_page_template('page-camp-ua.php')) {
        wp_enqueue_style( 'camp-style', get_template_directory_uri() . '/css/_camp.css', NULL, filemtime(get_template_directory() . '/css/_camp.css'), 'all');
    }
}
add_action('wp_enqueue_scripts', 'theme_files');

function theme_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');

}
add_action('after_setup_theme', 'theme_features');

?>