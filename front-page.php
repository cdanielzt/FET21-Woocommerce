<?php get_header() ?>

<div class="hero-wrap" style="" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-lg-6 col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <br>
                    <span class="text-cian">4°</span> 
                    <span class="text-fucsia">Foro</span> 
                    <span class="text-azul">Emprendedor</span>
                    <span class="text-green">Tapachula 2021</span>  
                </h1>
                <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                        class="icon-calendar mr-2"></span>4 y 5 de Noviembre de 2021 - Teatro de la Ciudad Tapachula,
                    Chiapas</p>
                <div id="timer" class="d-flex">
                    <div class="time" id="dias"></div>
                    <div class="time pl-3" id="horas"></div>
                    <div class="time pl-3" id="minutos"></div>
                    <div class="time pl-3" id="segundos"></div>
                </div>
            </div>
            <div class="col-lg-2 col"></div>
            <div class="col-lg-4 col-md-6 mt-0 mt-md-5">
                <form action="#" class="request-form ftco-animate">
                    <h2>¡Aparta tu lugar!</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Correo electrónico">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Teléfono">
                    </div>
                    <div class="form-group">
                        <div class="checkbox mb-4">
                            <label><input type="checkbox" value="" class="mr-3"> He leido y acepto los términos y
                                condiciones.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Registrarme" class="btn btn-fucsia py-4 px-4">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>

<section>
    <div class="features">

    </div>
</section>


<section class="content">
    <div class="container">
        <div class="row gx-5">
        

        <div class="col col-xl-7">

            <?php if(have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content(); ?>

            <?php endwhile; else: endif;?>
        </div>
        <div class="col col-xl-5">
            <div class="d-flex justify-content-center">
            <?php the_post_thumbnail('medium'); ?>
            </div>
        </div>
        </div>
    </div>

</section>

<section class="bg-light">

    <div class="container">
        <div class="row justify-content-center mb-5">

            <div class="col-md-7 text-center">
                <h3 class="mb-3 pt-3">Agenda del evento</h3>
            </div>
        </div>



        <div class="fet-agenda">
            <div class="container">
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
                            <?php
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'category_name' => 'conferencia',
                                'posts_per_page' => 5,
                            );
                            $arr_posts = new WP_Query( $args );
                            ?>
                            <?php if($arr_posts->have_posts()): ?>
                            <?php while ($arr_posts->have_posts()): ?>
                                
                             <?php $arr_posts->the_post(); ?>
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
    </div>


</section>

<?php get_footer() ?>