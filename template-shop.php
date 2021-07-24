<?php 
/*
Template Name: Shop Page
*/
get_header() ?>

<section class="content">

<div class="container">
   
    <div class="row">

        <div class="col-lg-12">

        <?php if(have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content(); ?>

        <?php endwhile; else: endif;?>
        </div>

    </div>

</div>

</section>

<?php get_footer() ?>