<?php 
//template Name: Plantilla centrada
get_header() ?>

<section class="hero-wrap-center parallax-window col-12" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory')?>/dist/img/fondo.png">
    <div class="container">
        <div class="row no-gutter slider-text align-items-end justify-content-center align-content-end ">
        <div class="col-md-8">
            <div class="breadcrumbs mb-5" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        </div>
    </div>

</section>


<?php get_footer() ?>