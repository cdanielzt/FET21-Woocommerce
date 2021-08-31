<?php get_header(); ?>

<section class="hero-wrap-2 parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory')?>/dist/img/fondo.png">
    <div class="container">
        <div class="row no-gutter slider-text align-items-end justify-content-start align-content-end ">
        <h1><?php the_title(); ?></h1>
        <div class="breadcrumbs mb-5" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
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

<?php get_footer(); ?>