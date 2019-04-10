
<?php get_header();?>
<div class="content news-page container">

<div class="cards grid">

  <?php
  $news = new WP_Query( array( 'category_name' => 'story,event' ) );
  while ( $news -> have_posts() ) : $news -> the_post();
  $category = get_the_category();
  $date = get_post_meta(get_the_id(), "date", true);
  $author = get_post_meta(get_the_id(), "author", true);
  ?>

  <a class="card" href="<?php echo the_permalink() ?>">
    <div class="card__figure">
      <figure>
        <?php the_post_thumbnail(); ?>
      </figure>
      <div class="card__meta">
        <p class="type"><?php echo $category[0]->name; ?></p>
        <?php if ($date): ?>
          <p class="date"><?php echo $date ?></p>
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
