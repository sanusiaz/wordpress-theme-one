<?php
    /**
     * Add Theme Supports
     *
     * @package ThemeOne
     * @author https://github.com/sanusiaz
     */
    
    namespace THEME_ONE\Inc;

    class Support {
        use \THEME_ONE\Inc\Traits\Singleton;

        protected function __construct () 
        {
            add_action('after_setup_theme', [$this, 'setup_theme']);
        }

        public function setup_theme()
        {
            add_theme_support('title-tag');
            add_theme_support('title-attribute');
            add_theme_support('html5', [
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
                'search-form'
            ]);

            add_theme_support('post-thumbnails');

            // to resive images to full align wide, middle and center
            add_theme_support('align-wide');

            // add custom logo support 
            add_theme_support('custom-background', [
                'default-color' => '#fff'
            ]);

            add_theme_support('custom-logo', [
                'width' => 720,
                'height' => 480,
                'flex-height' => true,
                'flex-width' => true,
                'header-text' => array( 'site-title', 'site-description' )
            ]);

            add_theme_support('editor-styles');

            add_editor_style();

            add_theme_support('customize-selective-refresh-widgets');
            add_theme_support('customize-selective-refresh');

            add_theme_support('automatic-feed-links');
            add_theme_support('wp-block-styles');

            // Align wide
            add_theme_support('align-wide');
        }

    }