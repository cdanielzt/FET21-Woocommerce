<footer class="bg-light">
    <div class="container py-5">
      <div class="row py-4">
      <div class="text-center"><img src="<?php bloginfo('template_directory')?>/dist/img/logo-fet21.png" alt="" width="180" class="mb-3">
          <p class="font-italic text-muted">Foro Emprendedor Tapachula 2021</p>
          <ul class="list-inline mt-4">
            <li class="list-inline-item"><a href="https://www.facebook.com/FOROEMPRENDEDOR21/" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/foroemprendedortapachula/" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        </div>
        <div class="row">
        <div class="text-center">
          <h6 class="text-uppercase font-weight-bold mb-4">Menu</h6>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'footer',
                'depth'             => 2,
                'container'         => '',
                'container_class'   => '',
                'container_id'      => 'footer-nav',
                'menu_class'        => 'list-unstyled mb-0 d-flex justify-content-center gap-3',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
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