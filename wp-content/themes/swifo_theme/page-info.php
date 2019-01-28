<body>
<?php get_header();?>

  <div class="content info-page" id="info">

  <section>
    <?php get_template_part( 'partials/faq'); ?>
  </section>

    <div class="container location">
      <div class="hide-overflow-x">
        <h3 class="orange-line">Location</h3>
      </div>
    </div>
    <div class="bar bar-darkblue">
      <div class="container">
        <p class="big subheading">All classes take place in StayOkay<span> Amsterdam Oost (Zeeburg)</span></p>
      </div>
    </div>
    <div class="map">
      <iframe src="https://maps.google.com/maps?q=timorplein%2021%20amsterdam&t=&z=16&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
  </div>
  <?php get_footer();?>
</body>
