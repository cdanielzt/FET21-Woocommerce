<?php get_header() ?>

<section class="hero-wrap hero-wrap-2">
    <div class="container">
        <div class="row no-gutter">

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

        <div class="col-lg-9">
        <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url( 'post_image' ); ?>" alt="<?php the_title(); ?>" class="img-fluid">
        <?php endif;?>
        <h1><?php the_title(); ?></h1>

        <?php if(have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content(); ?>

        <?php endwhile; else: endif;?>
        </div>

    </div>

</div>

</section>

<?php get_footer() ?>