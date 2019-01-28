<footer>


  <!-- with css grid -->
  <div class="footer__content container">
    <div class="footer__logo">
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/short_logo_white.svg" alt=""> -->
    </div>
    <div class="footer__social">
      <a href="mailto:info@swingfoundation.nl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/envelope-regular.svg" alt=""></a>
      <a href="https://www.facebook.com/Swing-Foundation-270843653573016/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-f-brands.svg" alt=""></a>
      <a href="https://www.instagram.com/swing.foundation/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-brands.svg" alt=""></a>
    </div>
      <?php wp_nav_menu( array( 'theme_location' => 'header-navbar', 'container_class' => 'footer__sitenav') ); ?>
    <div class="footer__copyright">
      <p>Web design by Hákon Bjarnason | Logo design by Sigríður&nbsp;Ása&nbsp;Júlíusdóttir</p>
    </div>
  </div>


</footer>
