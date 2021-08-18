<?php get_header() ?>




<section class="content">

    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <h1 class="my-5"><?php the_archive_title() ?></h1>
                <div class="col-12">
                    <select class="form-control" name="tipo-ponente" id="">
                        <option value="">Todas las categorias</option>
                        <?php $terms = get_terms('categoria-conferencias',array('hide_empty' => true)); ?>
                        <?php foreach ($terms as $term) {
                            echo '<option value"'.$term->slug.'">'.$term->name.'</option>';
                        }?>
                    </select>
                </div>
            </div>
            <div class="fet-agenda">
                <div class="row">
                    <div class="col-md-3 nav-link-wrap text-center text-md-right">
                        <div class="nav flex-column nav-pills">
                            <a class="nav-link ftco-animate active fadeInUp ftco-animated" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Primer día <span>4
                                    de noviembre</span></a>
                            <a class="nav-link ftco-animate active fadeInUp ftco-animated" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Segundo día <span>5
                                    de noviembre</span></a>
                        </div><!-- nav -->

                    </div><!-- col-md-3 -->

                    <div class="col-md-9 tab-wrap">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : ?>

                                        <?php the_post(); ?>
                                        <div class="speaker-wrap ftco-animate d-md-flex">

                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="img speaker-img" style="background-image: url('<?php the_post_thumbnail_url('post_image'); ?>' )">
                                                </div>
                                            <?php endif; ?>

                                            <div class="text">
                                                <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                <p><?php the_excerpt(); ?></p>
                                                <span class="time">09:00 am - 4:30 pm</span>
                                                <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall,
                                                    Building
                                                    Los
                                                    Angeles CA</p>
                                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                                    regelialia. It is a paradisematic country, in which roasted parts of sentences
                                                    fly
                                                    into
                                                    your mouth.</p>
                                                <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
                                            </div><!-- text -->
                                        </div><!-- speaker-wrap -->

                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div><!-- tab-pane -->


                        </div><!-- tab-content -->
                    </div><!-- col -->


                </div><!-- container -->

                <?php
                global $wp_query;

                $big = 999999999; // need an unlikely integer

                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(4, get_query_var('paged')),
                    'total' => $wp_query->max_num_pages
                ));
                ?>



</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-1">Conference Speakers</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
                
                

            </div>
            <div class="col-md-6">
                <div class="speaker ftco-animate speaker-1 d-flex align-items-center mb-5">
                    <div class="img" style="background-image:url(images/xstaff-1.jpg.pagespeed.ic.Cj5jigeoH2.webp)"></div>
                    <div class="text pl-4">
                        <h3>Kyle Bochs</h3>
                        <span class="position">Businessman</span>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <ul class="ftco-social">
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="speaker ftco-animate speaker-1 d-flex align-items-center mb-5">
                    <div class="img" style="background-image:url(images/xstaff-2.jpg.pagespeed.ic.N34kF03hER.webp)"></div>
                    <div class="text pl-4">
                        <h3>Arnold Thompson</h3>
                        <span class="position">Businessman</span>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <ul class="ftco-social">
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="speaker ftco-animate speaker-1 d-flex align-items-center mb-5">
                    <div class="img" style="background-image:url(images/xstaff-3.jpg.pagespeed.ic.2dXvt5NL00.webp)"></div>
                    <div class="text pl-4">
                        <h3>Ryan Sy</h3>
                        <span class="position">Businessman</span>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <ul class="ftco-social">
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="speaker ftco-animate speaker-1 d-flex align-items-center mb-5">
                    <div class="img" style="background-image:url(images/xstaff-4.jpg.pagespeed.ic._k-dfhk_s8.webp)"></div>
                    <div class="text pl-4">
                        <h3>Alysa Derick</h3>
                        <span class="position">Businesswoman</span>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <ul class="ftco-social">
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>