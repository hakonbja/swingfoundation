<?php
/**
 * The template for displaying the single post of Block 4
 *
 */

get_header(); ?>
<div class="content page-content single-page single-post-custom">
  <div class="container">
    <?php
      // Start the loop.
      while ( have_posts() ) : the_post();
      $fb = get_post_meta(get_the_id(), "fb_event", true);?>

      <?php the_content();

      // End the loop.
      endwhile;
    ?>
    <h5>Schedule</h5>
  </div>

  <div class="schedule__wrapper content-4 selected">
    <?php get_template_part( 'partials/_schedule__block-4'); ?>
  </div>

  <div class="container">
    <?php get_template_part( 'partials/_reg-link'); ?>
    <?php if ($fb): ?>
      <a href=<?php echo $fb ?> target="_blank">
        <img class="fb" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-square-brands.svg" alt="">
      </a>
    <?php endif; ?>

    <div class="link-back">

      <!-- <a href="<?php echo get_site_url(); ?>/news"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/angle-double-left-solid.svg" alt="">Back to News</a> -->
      <a href="<?php echo get_site_url(); ?>/news">
        <!-- <?php //echo file_get_contents("/assets/img/angle-double-left-solid.svg", true); ?> -->
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-double-left" class="svg-inline--fa fa-angle-double-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path
          d="M223.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L319.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L393.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34zm-192 34l136 136c9.4 9.4 24.6 9.4 33.9 0l22.6-22.6c9.4-9.4 9.4-24.6 0-33.9L127.9 256l96.4-96.4c9.4-9.4 9.4-24.6 0-33.9L201.7 103c-9.4-9.4-24.6-9.4-33.9 0l-136 136c-9.5 9.4-9.5 24.6-.1 34z"></path>
      </svg>
      Back to News
    </a>
    </div>

  </div>
</div>

<?php get_footer(); ?>
