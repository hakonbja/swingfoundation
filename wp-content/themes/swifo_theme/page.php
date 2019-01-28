<body>
<?php get_header();?>

  <section>
    <div class="container"> <!-- Add page slug in class -->
      <div class="page-content single-page">
        <?php
    			while ( have_posts() ) : the_post();

    				the_content();

    			endwhile; // End of the loop.
    			?>
      </div>
    </div>
  </section>

  <?php get_footer();?>
</body>
