<?php get_header() ?>

<section class="ftco-section">

<div class="container mt-4">
        <div class="row">
            
      
        <div class="col-md-6 col-12">
        <a href="<?php the_permalink()?>;">
            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url( 'post_image' ); ?>" alt="<?php the_title(); ?>" class="img-fluid">
            <?php endif;?>
        </a>
        </div>
        <div class="col-md-6 col-12">
        <h1><?php the_title(); ?></h1>

        <?php if(have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content(); ?>
        <?php get_template_part('template-parts/post','navigation')?>
        <?php endwhile; else: endif;?>
        </div>
        </div>
    
    </div>

</section>

<?php get_footer() ?>