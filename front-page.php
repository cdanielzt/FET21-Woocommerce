<?php get_header() ?>
<section>
<div class="hero-wrap parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory')?>/dist/img/fondo.png" data-android-fix="false" data-ios-fix="false">

    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start">
            <div class="col-xl-6 col-lg-6 col-md-6 ftco-animate">
                <h1 class="mb-4">
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
            <div class="col col-lg-2 d-md-none d-lg-block"></div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="request-form ftco-animate">
                    <h2>¡Aparta tu lugar!</h2>
                    <!-- <?php echo do_shortcode('[contact-form-7 id="28" title="Formulario preRegistro"]')?> -->
                    <?php echo do_shortcode('[fluentform id="3"]')?>
                </div>
            </div>  <!-- col -->
        </div> <!-- row -->
    </div><!-- container -->
</div> <!-- hero wrap -->
</section>


<section class="ftco-section section-services">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-3 d-flex align-self-stretch">
                <div class="media block-6 services d-block">
                    <div class="icon">
                    <img src="<?php bloginfo('template_directory')?>/images/icons/place-localizer.svg" alt="" width="70">
                    </div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Sede</h3>
                        <p>Teatro de la Ciudad. Av. Independencia s/n, INFONAVIT Solidaridad 2000, Tapachula, Chiapas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch">
                <div class="media block-6 services d-block">
                    <div class="icon">
                    <img src="<?php bloginfo('template_directory')?>/images/icons/job-interview.svg" alt="" width="70">
                    </div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Evento Híbrido</h3>
                        <p>Lo mejor de los dos mundos. Disfruta del Foro de manera presencial o virtual.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch">
                <div class="media block-6 services d-block">
                    <div class="icon">
                    <img src="<?php bloginfo('template_directory')?>/images/icons/employee.svg" alt="" width="70">
                    </div>
                    <div class="media-body">
                        <h3 class="heading mb-3">10 Ponentes</h3>
                        <p>Conoce las historias de los ponentes, emprendedores, empresarios, directores.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch">
                <div class="media block-6 services d-block">
                    <div class="icon">
                    <img src="<?php bloginfo('template_directory')?>/images/icons/course.svg" alt="" width="70">
                    </div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Cursos</h3>
                        <p>Desarrolla nuevas competencias que te ayudarán en tu carrera profesional.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row">
        <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"">
                <div class="img speaker-img" style="background-image: url('<?php the_post_thumbnail_url( 'post_image' ); ?>' )"> </div>   
            </div>
            <div class="col-md-7 wrap-about py-md-5 about">
                <?php if(have_posts()) : while(have_posts()) : the_post();?>
                <h2><?php the_title();?></h2>
                <?php the_content(); ?>
                <?php endwhile; else: endif;?>
            </div>

        </div>
    </div>

</section>

<section class="ftco-section">

    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section">
                <h2>Agenda del evento</h2>
            </div>
        </div>



        <div class="fet-agenda">
            <div class="row">

                <div class="col-md-3 nav-link-wrap text-center ">
                <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active text-md-end" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Primer día 
                            <span class="text-md-end">4 Nov 2021</span></button>
                </li>
                <li class="nav-item " role="presentation">
                    <button class="nav-link text-md-end" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Segundo día 
                            <span class="text-md-end">5 Nov 2021</span></button>
                </li>
                </ul>

                </div><!-- col-md-3 -->


                <div class="col-md-9 tab-wrap">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="col mb-5">
                        <select class="form-control" name="categorias-productos" id="categorias-productos">
                            <option value="">Todas las categorias</option>
                            <?php $terms = get_terms('categoria-conferencias', ['hide_empty' => true]) ?>
                            <?php foreach ($terms as $term): ?>
                                <option value="<?php echo $term->slug  ?>">
                                    <?php echo $term->name ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        </div>
                        
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <?php
                              $args = array(
                                'post_type' => 'Ponentes',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'meta_query' => array(
                                    'relation' => 'AND',
                                    'dia_evento' => array(
                                        'key'     => 'dia_evento',
                                        'value' => '1',
                                        'compare' => 'EXISTS',
                                    ),
                                    'orden' => array(
                                        'key'     => 'orden',
                                        'compare' => 'EXISTS',
                                    ), 
                                ),
                                'orderby'			=> array(
                                    'dia_evento' =>'ASC',
                                    'orden' => 'ASC'
                                )
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
                                <?php
                                    $fields = get_fields();
                                    ?>
                                    <p class="capitalised"><?php echo $fields['tipo_ponencia'] ?> 
                                    <?php
                                    $modalidad = get_field('modalidad');
                                    if($modalidad == "Presencial"){
                                        echo ' <span>'.$modalidad.'</span>';
                                    } else{
                                        echo ' <span class="bg-purple">'.$modalidad.'</span>';
                                    }
                                      ?> 
                                    </p>
                                    <h2> <a href="<?php the_permalink(); ?>"><?php echo $fields['titulo'] ?></a></h2>
                                    <p><?php the_excerpt(); ?></p>
                                    <span class="time"><?php echo $fields['horario'] ?></span>
                 
                                    <h3 class="speaker-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> &mdash; <span
                                            class="position"><?php echo $fields['puesto'] ?></span></h3>
                                </div><!-- text -->
                            </div><!-- speaker-wrap -->

                            <?php endwhile; ?>
                            <?php endif; ?>


                        </div><!-- tab-pane -->

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <?php
                            $args = array(
                                'post_type' => 'Ponentes',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'meta_query' => array(
                                    'relation' => 'AND',
                                    'dia_evento' => array(
                                        'key'     => 'dia_evento',
                                        'value' => '2',
                                        'compare' => 'EXISTS',
                                    ),
                                    'orden' => array(
                                        'key'     => 'orden',
                                        'compare' => 'EXISTS',
                                    ), 
                                ),
                                'orderby'			=> array(
                                    'dia_evento' =>'ASC',
                                    'orden' => 'ASC'
                                )
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
                                <?php
                                    $fields = get_fields();
                                    ?>
                                    <p class="capitalised"><?php echo $fields['tipo_ponencia'] ?> 
                                    <?php
                                    $modalidad = get_field('modalidad');
                                    if($modalidad == "Presencial"){
                                        echo ' <span>'.$modalidad.'</span>';
                                    } else{
                                        echo ' <span class="bg-purple">'.$modalidad.'</span>';
                                    }
                                      ?> </p>
                                    <h2> <a href="<?php the_permalink(); ?>"><?php echo $fields['titulo'] ?></a></h2>
                                    <p><?php the_excerpt(); ?></p>
                                    <span class="time"><?php echo $fields['horario'] ?></span>
                 
                                    <h3 class="speaker-name"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> &mdash;<span
                                            class="position"><?php echo $fields['puesto'] ?></span></h3>
                                </div><!-- text -->
                            </div><!-- speaker-wrap -->

                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div><!-- tab-content -->
                   
                </div><!-- col -->
    </div>


</section>

<?php get_footer() ?>