<?php get_header() ?>


<section class="ftco-section my-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
                <h2 class="mb-1"><?php the_archive_title()?></h2>
        </div>
        <div class="row">
            <div class="col d-flex align-items-stretch">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <div class="speaker ftco-animate speaker-1 d-flex align-items-center mb-5">
                    <div class="img" style="background-image: url('<?php the_post_thumbnail_url('post_image'); ?>' )"></div>
                    <div class="text pl-4">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <span class="position">Businessman</span>
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