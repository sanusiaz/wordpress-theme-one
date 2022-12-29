<?php
    /**
     * Header Template file
     *
     * @package ThemeOne
     * @author https://github.com/sanusiaz
     */
?>


<!DOCTYPE html>
<html lang="<?= language_attributes(  );?>">
<head>
    <meta charset="<?= bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <?php wp_head();?>
</head>
<body <?= body_class( 'bg-blue-200' );?>>

    <?php

        if ( function_exists('wp_body_open') )
        {
            wp_body_open();
        }
    ?>

    <header class="flex justify-between p-2 px-5 items-center w-full">
        <?php

            if ( function_exists('the_custom_logo') )
            {
                the_custom_logo(  );
            }
        ?>
        <?php get_template_part( 'template-parts/header/nav' )?>
    </header>

