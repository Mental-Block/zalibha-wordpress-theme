<?php 

    function sajith_register_styles(){
        $version = wp_get_theme()->get('Version');    
        
        wp_enqueue_style('normalize-reset-style', get_template_directory_uri() . '/assets/css/reset.css', array(), 'all');
        wp_enqueue_style('sajith-style', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    }

    add_action('wp_enqueue_scripts', 'sajith_register_styles');

    function sajith_register_scripts(){
        wp_enqueue_script('sajith-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), microtime(), true);
    }

    add_action('wp_enqueue_scripts', 'sajith_register_scripts');

    if(!function_exists('sajith_register_nav_menu')) {
        function sajith_register_nav_menu(){
            register_nav_menus( 
                array(
                'primary_menu' => __( 'Primary Menu', 'text_domain' ),
                'secondary_menu' => __( 'Secondary Menu', 'text_domain'),
                'footer_menu'  => __( 'Footer Menu', 'text_domain' )
            ));
        }

        add_action('after_setup_theme', 'sajith_register_nav_menu', 0);
    }

    if(!function_exists('sajith_theme_support')){
        function sajith_theme_support(){
            add_theme_support('title-tag');
            add_theme_support('custom-logo');
        }

        add_action('after_setup_theme', 'sajith_theme_support');
    }


    if (!function_exists('register_navwalker')) :
        function register_navwalker() {
            require('inc/jsc-navwalker.php');
        } 
    endif;

    add_action('after_setup_theme', 'register_navwalker');

?> 