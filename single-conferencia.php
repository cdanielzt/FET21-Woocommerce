<?php get_header() ?>

<section class="content">

<div class="container mt-5">
        <div class="row">
            
      
        <div class="col-md-6 col-12">
        <a href="<?php the_permalink()?>;">
            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url( 'post_image' ); ?>" alt="<?php the_title(); ?>" class="img-fluid">
            <?php endif;?>
        </a>
        </div>
        <div class="col-md-6 col-12">
        <h1><?php the_title(); ?></h1>

        <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <?php $taxonomy = get_the_terms(get_the_id(),'categoria-conferencias'); ?>

        <?php the_content(); ?>
        <?php get_template_part('template-parts/post','navigation')?>
        <?php endwhile; else: endif;?>
        <?php 
         $ID = get_the_ID();
        $args = array(
            'post_type' => 'conferencia',
            'post_status' => 'publish',
            'post_per_page' => 3,
            'order' => 'ASC',
            'orderby' => 'title',
            'post__not_in' => array($ID),
            'tax_query' => array(
                array(
                    'taxonomy' => 'categoria-conferencia',
                    'field' => 'slug',
                    'terms' => $taxonomy[0]->slug
                )
            )

        );
        $posts = new WP_Query($args);?>

        <?php if($posts->have_posts()){ ?>
           
            <div class="row justify-content-center text-center conferencia-relacionada">
                <h3>Conferencias relacionadas</h3>
                <?php while($posts->have_posts()){?>
                    <?php $posts->the_post() ?>
                    <div class="col my-3">
                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                        <h4><a href="<?php the_permalink( )?>">
                        <?php the_title();?>
                        </a> </h4>
                    </div>
                    <?php } ?>
            </div>

        <?php }?>
        
        </div>
        </div>
    
    </div>

</section>

<?php get_footer() ?>