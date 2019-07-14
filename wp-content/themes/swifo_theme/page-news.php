
<?php get_header();?>
<div class="content news-page container">

<div class="cards grid">

  <?php
  $args = array(
    'post_type' => 'post',
    'meta_key' => 'date',
    'orderby' => 'meta_value',
    'order' => 'DESC',
  );

  $news = new WP_Query( $args );

  while ( $news -> have_posts() ) : $news -> the_post();
    $type = get_post_meta(get_the_id(), 'news_type', true);
    $date_text = get_post_meta(get_the_id(), 'date', true);
    $date = date('F j, Y', strtotime($date_text));
    $author = get_the_author();
    ?>

    <a class="card" href="<?php echo the_permalink() ?>">
      <div class="card__figure">
        <figure>
          <?php the_post_thumbnail(); ?>
        </figure>
        <div class="card__meta">
          <p class="type"><?php echo $type; ?></p>

          <?php if ($type === 'Event'): ?>
            <p class="date"><?php echo $date?></p>
          <?php elseif ($author): ?>
            <p class="author">by <?php echo $author ?></p>
          <?php endif ?>

        </div>
      </div>
      <div class="card__info">
        <h4 class="title"><?php echo the_title() ?></h4>
        <p class="excerpt"><?php echo get_the_excerpt() ?></p>
      </div>
    </a>
  <?php endwhile; ?>


</div>



</div>
  <?php get_footer();?>
</body>
