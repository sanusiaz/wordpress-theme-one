<?php
    /**
     * Trait Singleton for template
     *
     * @package ThemeOne
     * @author https://github.com/sanusiaz
     */
    
    namespace THEMEONE\Traits;

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
        final public function get_instance()
        {
            static $instance = [];

            $called_class = get_called_class();

            if ( !isset($instance[$called_class]) )
            {
                $instance[$called_class] = $called_class;

                do_action(sprintf("themeone_theme_singleton_init%s", $called_class));
            }
            return $instance[$called_class];
        }

    }

?>