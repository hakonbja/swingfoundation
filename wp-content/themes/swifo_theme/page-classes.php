<body>
<?php get_header();?>

  <div class="content classes-page" id="classes">

    <section>
      <?php get_template_part( 'partials/schedule'); ?>
    </section>

    <section>
      <?php get_template_part( 'partials/levels'); ?>
    </section>

    <section>
      <?php get_template_part( 'partials/prices'); ?>
    </section>

  </div>
  <?php get_footer();?>
</body>
