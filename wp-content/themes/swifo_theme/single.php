<?php
/**
 * The template for displaying all single posts and attachments
 *
 */

get_header(); ?>
<div class="content single-post-custom">
  <div class="container">
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post(); ?>
    <p class="excerpt"><?php echo get_the_excerpt(); ?></p>

    <!-- <figure>
      <?php //the_post_thumbnail(); ?>
    </figure> -->

    <?php the_content(); ?>

    <?php
    // End the loop.
    endwhile;
    ?>
  </div>
</div>

<?php get_footer(); ?>
