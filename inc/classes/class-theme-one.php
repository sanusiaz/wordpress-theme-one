<?php

    /**
     * Bootstrap the theme
     *
     * @package ThemeOne
     * @author https://github.com/sanusiaz
     */
    namespace THEME_ONE\Inc;

    class THEME_ONE {
        use \THEME_ONE\Inc\Traits\Singleton;

        public function __construct()
        {
            // load all classes
            Assets::get_instance();
        }
    }