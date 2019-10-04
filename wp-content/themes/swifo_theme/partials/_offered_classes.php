<?php
$args = array(
  'post_type' => 'classes',
  'orderby' => 'title',
  'order' => 'ASC',
  'meta_key' => 'class_show_on_frontpage',
  'meta_value' => 'Yes',
);
$classes = new WP_Query( $args );
?>

<div class="glider-contain multiple">

  <button class="glider-prev">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
      <path transform="rotate(-180 12 12)" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.218 19l-1.782-1.75 5.25-5.25-5.25-5.25 1.782-1.75 6.968 7-6.968 7z" />
    </svg>
  </button>

  <div class="classes-glider">
  <?php
    while ( $classes -> have_posts() ) : $classes -> the_post();
      $weekday = get_post_meta(get_the_id(), 'class_weekday', true);
      $start_time = get_post_meta(get_the_id(), 'class_start_time', true);
      $end_time = get_post_meta(get_the_id(), 'class_end_time', true);
      $short_title = get_post_meta(get_the_id(), 'class_short_title', true);
      $title = ($short_title ? $short_title : get_the_title());
      $anchor = str_replace(array('/', ' '), array('', '-'), strtolower( get_the_title() ));
      echo '
        <div class="slide">
        <li class="class">
          <p class="class__time"><a href="' . get_site_url() . '/classes/#">' . $weekday . ' at ' . $start_time . '-' . $end_time . '</a></p>
          <p class="class__name">' . $title . '</p>
          <a class="class__button" href="' . get_site_url() . '/classes/#' . $anchor . '">Level description</a>
          ' . get_the_post_thumbnail() . '
        </li>
        </div>
      ';
    endwhile;
    wp_reset_postdata();
    ?>
    
  </div>

  <button class="glider-next">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
      <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.218 19l-1.782-1.75 5.25-5.25-5.25-5.25 1.782-1.75 6.968 7-6.968 7z" />
    </svg>
  </button>

  <div id="dots" class="dots"></div>

</div>