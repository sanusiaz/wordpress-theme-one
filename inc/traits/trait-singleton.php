<?php
    /**
     * Trait Singleton for template
     *
     * @package ThemeOne
     * @author https://github.com/sanusiaz
     */
    
    namespace THEME_ONE\Inc\Traits;

    trait Singleton {
        public function __construct()
        {

        }

        public function __clone()
        {
            // prevents objects clonning
        }


        /**
         * Get CLass Instance 
         * @return [called_class] [instance of called class]
         */
        final public static function get_instance()
        {
            static $instance = [];

            $called_class = get_called_class();

            if ( !isset($instance[$called_class]) )
            {
                $instance[$called_class] = new $called_class;

                do_action(sprintf("theme_one_singleton_init%s", $called_class));
            }
            return $instance[$called_class];
        }

    }

?>