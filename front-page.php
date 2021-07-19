<?php get_header() ?>

    <div id="hero">
        <div class="container d-flex align-items-center justify-content-center h-100">
            
        </div>
    </div>

    <section class="content">

        <div class="container">

            <?php if(have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content(); ?>
            
            <?php endwhile; else: endif;?>
        </div>

    </section>

<?php get_footer() ?>