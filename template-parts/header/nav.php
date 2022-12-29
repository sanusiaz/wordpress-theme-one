<?php

    /**
     * Navigation Template
     */
    
    $menusInstance = \THEME_ONE\Inc\Menus::get_instance();
    $header_menu_id = $menusInstance->get_menu_id( 'theme-one-header-menu' );
    $header_menus = wp_get_nav_menu_items( $header_menu_id );
?>

<nav>
    <?php if( isset($header_menus) && count( $header_menus ) > 0 ): ?>
    <ul class="flex gap-2">
        <?php 

        foreach( $header_menus as $menus ){

            $childMenus = $menusInstance->__get_child_menus($header_menus, $menus->ID);

            $has_children = !empty ( $childMenus ) && is_array($childMenus);
            ?>
            <li class="text-gray-700 bg-gray-300  p-2">
                <?php
                if ( $has_children ) {
                    ?>

                        <ol>
                            <?php
                                foreach( $childMenus as $childMenu )
                                {
                                ?>  
                                    <li><a href="<?php echo esc_url($childMenu->url);?>"><?php echo esc_html__($childMenu->title) ;?>ggg</a></li>
                                <?php
                                }
                            ?>
                        </ol>
                    <?php
                }

                else {
                    ?>

                    <a href="<?php echo esc_url($menus->url);?>"><?php echo esc_html__($menus->title) ;?>etjyy</a>
                    <?php
                }
                ?>
            </li>
            <?php
        }


        ?>
       
    </ul>

    <?php endif;?>
</nav>