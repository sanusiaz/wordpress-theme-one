<?php
    
    namespace THEME_ONE\Inc\Menus;
    class Menus {
        use Singleton;

        public function __construct()
        {

        }

        public function __setup_hooks() 
        {
            add_action('after_setup_theme', [$this, 'register_menus']);
        }

        public function register_menus()
        {
            register_nav_menus([
                'tcc_header_menu' => esc_html__('Header Menu', 'tcc'),
                'tcc_footer_menu' => esc_html__('Footer Menu', 'tcc')
            ]);
        }

        public function __get_menu_id($location)
        {
            $locations = get_nav_menu_locations();


            return ( !empty( $locations[$location] ) ) ? $locations[$location] : '';
        }

        public function __get_child_menus(int $parent_id, array $menu) :array|string
        {

        }

    }

?>