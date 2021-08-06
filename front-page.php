<?php get_header() ?>

<div class="hero-wrap" style="background-image:url('../dist/img/hero.jpg')" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-lg-6 col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <br><span>Foro Emprendedor Tapachula 2021</span></h1>
                <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                        class="icon-calendar mr-2"></span>4 y 5 de Noviembre de 2021 - Teatro de la Ciudad Tapachula, Chiapas</p>
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
                            <label><input type="checkbox" value="" class="mr-3"> He leido y acepto los términos y condiciones.</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Registrarme" class="btn btn-primary py-4 px-4">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>



<section class="content">
    <div class="container">
        <div class="col col-xl-7">
            <?php if(have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content(); ?>

            <?php endwhile; else: endif;?>
        </div>

        <div class="col col-xl-5">
            <?php the_post_thumbnail(); ?>
        </div>

    </div>

</section>

<section class="container mb-5">
    <h3>Agenda del evento</h3>
    <div class="row">
        <div class="col-xl-2 d-flex flex-column">
            <a href="" class="btn btn-light p-4">4 de Noviembre</a>
            <a href="" class="btn btn-light p-4">5 de Noviembre</a>
        </div>

        <div class="col-xl-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Conferencia</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit quibusdam
                        suscipit totam dolore numquam qui, culpa explicabo nobis quia aliquid ab ea eveniet
                        exercitationem architecto commodi quam ducimus atque assumenda!</p>
                </div>
            </div>
        </div>
    </div>



</section>

<?php get_footer() ?>