<?php

    
    /**
     * Theme Functions 
     *
     * @package ThemeOne
     */
    
    if ( !defined( 'THEME_ONE_VERSION' ) )
    {
        define('THEME_ONE_VERSION', filemtime(get_stylesheet_directory() . './style.css'));
    }


    if ( !defined( 'THEME_ONE_DIR_PATH' ) )
    {
        define( 'THEME_ONE_DIR_PATH', untrailingslashit(get_template_directory()) );
    }
     
    if ( !defined( 'THEME_ONE_DIR_URI' ) )
    {
        define( 'THEME_ONE_DIR_URI', untrailingslashit(get_template_directory_uri()) );
    }

    require_once THEME_ONE_DIR_PATH . '/inc/helpers/autoloader.php';

    function __get_bootstrapped_file()
    {
        \THEME_ONE\Inc\THEME_ONE::get_instance();
    }

    __get_bootstrapped_file();