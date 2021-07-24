<?php get_header() ?>

<div class="main-container container">

<h1><?php the_title(); ?></h1>

</div>

<section class="content">

<div class="container">

    <?php if(have_posts()) : while(have_posts()) : the_post();?>

    <?php the_content(); ?>
    
    <?php endwhile; else: endif;?>
</div>

</section>

<?php get_footer() ?>

<?php get_footer() ?>