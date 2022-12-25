<?php

    
    /**
     * Theme Functions 
     *
     * @package ThemeOne
     */
    
    define('THEME_VERSION', filemtime(get_stylesheet_directory() . './style.css'));
    

    function az_add_custom_styles()
    {
        wp_register_style("stylesheet", get_template_directory_uri() . './style.css', [],  THEME_VERSION, 'all');

        wp_register_script("mainjs", get_template_directory_uri() . './js/main.js', [], THEME_VERSION, false);


        wp_enqueue_style('stylesheet');
        wp_enqueue_script('mainjs');
    }


    add_action("wp_enqueue_scripts", "az_add_custom_styles");