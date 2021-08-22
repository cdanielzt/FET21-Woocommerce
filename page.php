<?php get_header() ?>

<section class="hero-wrap-2 parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory')?>/dist/img/fondo.png">
    <div class="container">
        <div class="row no-gutter slider-text align-items-end justify-content-start align-content-end ">
        <h1><?php the_title(); ?></h1>
        <div class="breadcrumbs mb-5" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
        </div>
    </div>

</section>

<section class="content">

<div class="container">

  
   
    <div class="row">
        
            
        
        <div class="col-lg-3">
            <div class="">
            <?php get_sidebar(); ?>
            </div>
        </div>

        <div class="col-lg-9 order-md-first">

        <?php if(have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content(); ?>

        <?php endwhile; else: endif;?>
        </div>

    </div>

</div>

</section>

<?php get_footer() ?>