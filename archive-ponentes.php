<?php get_header() ?>

<section class="hero-wrap-2 parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory')?>'/dist/img/fondo.png'">
    <div class="container">
        <div class="row no-gutter slider-text align-items-end justify-content-start align-content-end">
        <h1><?php post_type_archive_title(); ?></h1>
        <div class="breadcrumbs mb-5" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
        </div>
    </div>

<section class="ftco-section my-5">
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-stretch flex-wrap">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <?php $fields = get_fields(); ?>
                <div class="col-lg-6 speaker speaker-1 d-md-flex align-items-center mb-5">
                    <div class="img" style="background-image: url('<?php the_post_thumbnail_url('post_image'); ?>' )"></div>
                    <div class="text pl-4 pt-5 pt-md-0">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="position"><?php echo $fields['puesto'] ?></p>
                        <p><?php the_excerpt(); ?></p>
                        <ul class="ftco-social">
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>