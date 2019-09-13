
<?php get_header();?>
<div class="content events-page container">

<div class="cards grid">

  <?php
  $args = array(
    'post_type' => 'events',
    'meta_key' => 'start_date',
    'orderby' => 'meta_value',
    'order' => 'ASC',
    'meta_query' => array (
      'key' => 'end_date',
      'value' => date('Y-m-d', strtotime('today')),
      'compare' => '>=',
      'type' => 'DATE'
    )
  );

  $events = new WP_Query( $args );

  while ( $events -> have_posts() ) : $events -> the_post();
    $date_text = get_post_meta(get_the_id(), 'start_date', true);
    $date = date('F j, Y', strtotime($date_text));
    ?>

    <a class="card" href="<?php echo the_permalink() ?>">
      <div class="card__figure">
        <figure>
          <?php the_post_thumbnail(); ?>
        </figure>
        <div class="card__meta">
          <p class="date"><?php echo $date?></p>
        </div>
      </div>
      <div class="card__info">
        <h4 class="title"><?php the_title() ?></h4>
        <p class="excerpt"><?php echo get_the_excerpt() ?></p>
      </div>
    </a>
  <?php endwhile; ?>
</div>

</div>
  <?php get_footer();?>
</body>
