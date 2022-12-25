<?php
    /**
     * Load all classes
     */
    
    namespace THEME_ONE\Inc;

    class Assets {
        use \THEME_ONE\Inc\Traits\Singleton;

        protected function __construct () 
        {
            $this->__setup_hooks();
        }

        protected function __setup_hooks()
        {
            add_action('wp_enqueue_scripts', [$this, '__register_scripts' ]);
        }

        public function __register_scripts()
        {   
            // register styles
            wp_register_style("stylesheet", get_template_directory_uri() . './style.css', [],  THEME_ONE_VERSION, 'all');

            // repgister scripts
            wp_register_script("mainjs", get_template_directory_uri() . './js/main.js', [], THEME_ONE_VERSION, false);

            // Enqueue Styles 
            wp_enqueue_style('stylesheet');

            // enqueue scripts
            wp_enqueue_script('mainjs');
        }

    }