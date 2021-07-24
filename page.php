<?php get_header() ?>




<section class="content">

<div class="container">
    <img src="<?php the_post_thumbnail_url( 'post_image' ); ?>" alt="" class="img-fluid">
    <h1><?php the_title(); ?></h1>

    <?php if(have_posts()) : while(have_posts()) : the_post();?>

    <?php the_content(); ?>
    
    <?php endwhile; else: endif;?>
</div>

</section>

<?php get_footer() ?>

<?php get_footer() ?>