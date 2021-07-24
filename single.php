<?php get_header() ?>




<section class="content">

<div class="container">
   
    <div class="row">
        
            
        
        <div class="col-lg-3">
            <div class="sticky-top">
            <?php get_sidebar(); ?>
            </div>
        </div>

        <div class="col-lg-9">
        <a href="<?php the_permalink()?>;">
            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url( 'post_image' ); ?>" alt="<?php the_title(); ?>" class="img-fluid">
            <?php endif;?>
        </a>
        <h1><?php the_title(); ?></h1>

        <?php if(have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content(); ?>

        <?php endwhile; else: endif;?>
        </div>

    </div>

   

</div>

</section>

<?php get_footer() ?>