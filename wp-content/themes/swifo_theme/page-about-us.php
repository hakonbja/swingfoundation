<body>
<?php get_header();?>

  <div class="content about-us-page">

    <section>
      <div class="container about__swing-foundation">
        <div class="hide-overflow-x">
          <h3 class="orange-line">Swing Foundation</h3>
        </div>
        <?= get_post_field('post_content', $post->ID) ?>
      </div>
    </section>

  </div>
  <?php get_footer();?>
</body>
