<footer>


  <!-- with css grid -->
  <div class="footer__content container">
    <div class="footer__logo"></div>
    <div class="footer__social">
      <a href="mailto:info@swingfoundation.nl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/envelope-regular.svg" alt="Swing Foundation email address"></a>
      <a href="https://www.facebook.com/Swing-Foundation-270843653573016/" target="_blank" rel="noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-f-brands.svg" alt="Swing Foundation Facebook Page"></a>
      <a href="https://www.instagram.com/swing.foundation/" target="_blank" rel="noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-brands.svg" alt="Swing Foundation Instagram Account"></a>
    </div>
      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer__sitenav') ); ?>
    <div class="footer__copyright">
      <p>Web design by Hákon Bjarnason | Logo design by Sigríður&nbsp;Ása&nbsp;Júlíusdóttir</p>
    </div>
  </div>


</footer>
<?php wp_footer(); ?>

</body>
</html>
