<footer class="bg-light">
    <div class="container py-5">
      <div class="row py-4">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="<?php bloginfo('template_directory')?>/dist/img/logo-fet21.png" alt="" width="180" class="mb-3">
          <p class="font-italic text-muted">Foro Emprendedor Tapachula 2021</p>
          <ul class="list-inline mt-4">
            <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Menu</h6>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'footer',
                'depth'             => 2,
                'container'         => '',
                'container_class'   => '',
                'container_id'      => 'footer-nav',
                'menu_class'        => 'list-unstyled mb-0',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        </div>

        <div class="col-lg-4 col-md-6 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Newsletter</h6>
          <p class="text-muted mb-4">Enterate de primera mano sobre las noticias del Foro Emprendedor Tapachula.</p>
          <div class="p-1 rounded border">
            <div class="input-group">
              <input type="email" placeholder="Ingresa tu correo" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
              <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Copyrights -->
    <div class="bg-light py-4">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">© 2021 Foro Emprendedor Tapachula |<a href="<?php echo get_privacy_policy_url() ?>"> Politica de privacidad</a></p>
        
      </div>
    </div>
  </footer>

<?php wp_footer() ?>

</body>
</html>