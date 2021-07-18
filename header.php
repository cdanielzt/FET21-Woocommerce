<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head() ?>
</head>
<body <?php body_class('test') ?> >
    
<header>
    <div class="container d-flex justify-content-between ">
        <img src="<?php bloginfo('template_directory')?>/dist/img/logo-woocommerce.svg" class="img-fluid logo" alt="Logo del sitio">

        <?php 
        wp_nav_menu( array(
            'theme_location' => 'top-menu',
            'menu_class' => 'top-menu'
        )
        );?>
    </div>
</header>