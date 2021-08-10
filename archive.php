<?php get_header() ?>




<section class="content">

<div class="container">
   
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="my-5"><?php the_archive_title()?></h1>
        </div>
        <div class="fet-agenda">
            <div class="row">
                <div class="col-md-3 nav-link-wrap text-center text-md-right">
                    <div class="nav flex-column nav-pills">
                        <a class="nav-link ftco-animate active fadeInUp ftco-animated" id="v-pills-1-tab"
                            data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1"
                            aria-selected="true">Primer día <span>4
                                de noviembre</span></a>
                        <a class="nav-link ftco-animate active fadeInUp ftco-animated" id="v-pills-1-tab"
                            data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1"
                            aria-selected="true">Segundo día <span>5
                                de noviembre</span></a>
                    </div><!-- nav -->

                </div><!-- col-md-3 -->



                <div class="col-md-9 tab-wrap">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                            aria-labelledby="day-1-tab">
                            <?php if(have_posts()): ?>
                            <?php while (have_posts()): ?>
                                
                             <?php the_post(); ?>
                            <div class="speaker-wrap ftco-animate d-md-flex">
                               
                                <?php if(has_post_thumbnail()):?>
                                    <div class="img speaker-img"
                                    style="background-image: url('<?php the_post_thumbnail_url( 'post_image' ); ?>' )">
                                    </div>                             
                                <?php endif;?>

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
                                    <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span
                                            class="position">Founder of Wordpress</span></h3>
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
            
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 4, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages
            ) );
        ?>



</section>

<?php get_footer() ?>