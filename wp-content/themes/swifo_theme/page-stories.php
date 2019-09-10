
<?php get_header();?>
<div class="content stories-page container">

<div class="cards grid">

  <?php
  $args = array(
    'post_type' => 'post',
    'meta_key' => 'date',
    'orderby' => 'meta_value',
    'order' => 'DESC',
  );

  $stories = new WP_Query( $args );

  while ( $stories -> have_posts() ) : $stories -> the_post();
    $author = get_the_author();
    ?>

    <a class="card" href="<?php echo the_permalink() ?>">
      <div class="card__figure">
        <figure>
          <?php the_post_thumbnail(); ?>
        </figure>
        <div class="card__meta">
          <p class="author">By <?php echo $author ?></p>
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
