
<?php get_header();?>
<div class="content">


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
</div>
  <?php get_footer();?>
</body>
