<?php
    /**
     * Register Menus
     *
     * @package ThemeOne
     * @author https://github.com/sanusiaz
     */
    
    namespace THEME_ONE\Inc;

    class Menus {
        use \THEME_ONE\Inc\Traits\Singleton;

        protected function __construct () 
        {   
            $this->setup_hooks();
        }

        public function setup_hooks()
        {
            add_action('init', [$this, 'register_menus']);
        }

        public function register_menus()
        {
            register_nav_menus([
                'theme-one-header-menu' => esc_html__('Header Menu', 'themeone'),
                'theme-one-footer-menu' => esc_html__('Footer Menu', 'themeone')
            ]);
        }


        /**
         * Get Menu Locations
         * @param  [string] $location [The menu location i.e themeone-header-menu]
         * @return [int]           [menu id]
         */
        public function get_menu_id( $location )
        {
            $locations = get_nav_menu_locations();

            $menu_id = $locations[$location];

            return ! empty( $menu_id ) ? $menu_id : '';
        }

        /**
         * Get all child menus 
         * @param  [type] $menus     [description]
         * @param  [type] $parent_id [description]
         * @return [type]            [description]
         */
        public function __get_child_menus( $menus, $parent_id )
        {
           $child_menus = [];

            if ( !empty($menu_arr) && is_array($menu_arr) )
            {


                foreach ($menu_arr as $menu)
                {
                    if ( intval($menu->menu_item_parent) === $parent_id )
                    {
                        array_push($child_menus, $menu);
                    }
                }
            }

            return $child_menus;
        }

    }