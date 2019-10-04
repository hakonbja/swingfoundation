<?php
/**
 * The template for displaying all single posts and attachments - In our case the "Stories"
 *
 */

get_header(); ?>
<div class="content page-content single-page single-post-custom">
  <div class="container">
    <?php
      // Start the loop.
      while ( have_posts() ) : the_post();
      $fb = get_post_meta(get_the_id(), "fb_event", true);
      $type = get_post_meta(get_the_id(), 'news_type', true);
      $date_text = get_post_meta(get_the_id(), 'date', true);
      $date = date('F j, Y', strtotime($date_text));
      $start_time = get_post_meta(get_the_id(), 'start_time', true);
      $end_time = get_post_meta(get_the_id(), 'end_time', true);
      $location = get_post_meta(get_the_id(), 'location', true);
    ?>

    <?php the_content(); ?>
      
    <?php
      if ($type === 'Event'):?>
        <div class="meta-data">
          <p><strong>Date:</strong> <?php echo $date ?></p>
          <?php if ($start_time && $end_time): ?>
            <p><strong>Time:</strong> <?php echo $start_time . '-' . $end_time?></p>
            <?php elseif ($start_time): ?>
              <p><strong>Time:</strong> <?php echo $start_time?></p>
          <?php endif ?>
          <?php if($location): ?>
            <p><strong>Location:</strong> <?php echo $location ?> </p>
          <?php endif ?>
        </div>
      <?php endif ?>

      <?php if ($fb): ?>
        <a href=<?php echo $fb ?> target="_blank">
          <img class="fb" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-square-brands.svg" alt="">
        </a>
      <?php endif;
      // End the loop.
      endwhile;
    ?>

    <div class="link-back">
      <a href="<?php echo get_site_url(); ?>/stories">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-double-left" class="svg-inline--fa fa-angle-double-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path
          d="M223.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L319.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L393.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34zm-192 34l136 136c9.4 9.4 24.6 9.4 33.9 0l22.6-22.6c9.4-9.4 9.4-24.6 0-33.9L127.9 256l96.4-96.4c9.4-9.4 9.4-24.6 0-33.9L201.7 103c-9.4-9.4-24.6-9.4-33.9 0l-136 136c-9.5 9.4-9.5 24.6-.1 34z"></path>
        </svg>
        Back to Stories
      </a>
    </div>

  </div>
</div>

<?php get_footer(); ?>
