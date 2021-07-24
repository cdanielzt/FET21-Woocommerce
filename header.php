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
    <div class="container ">
        <div class="row">
            <div class="col d-flex alig-items-center justify-content-between">
                <a href="<?php bloginfo('url');?>">
                    <img src="<?php bloginfo('template_directory')?>/dist/img/logo-fet21.png" class="img-fluid logo" alt="Logo del sitio">
                </a>

                <?php 
                wp_nav_menu( array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'top-menu'
                )
                );?>
                <button type="button" class="btn btn-warning">Comprar boletos</button>
            </div>
        </div>
    </div>
</header>