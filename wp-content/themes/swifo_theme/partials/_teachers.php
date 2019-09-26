

<div class="teachers">
<?php
$args = array(
  'post_type' => 'teachers',
  'orderby' => 'title',
  'order' => 'ASC',
);
$teachers = new WP_Query( $args );
while ( $teachers -> have_posts() ) : $teachers -> the_post();
$content = get_the_content();
$content = wp_filter_nohtml_kses($content);
?>
  <div class="teacher">
  <?php if (has_post_thumbnail()) : ?>
    <div class="img-container img-blue-border">
      <?php the_post_thumbnail() ?>
      <?php $title = get_post(get_post_thumbnail_id()) -> post_title; ?>
      <p class="subtext"><?php echo $title ?></p>
    </div>
  <?php endif ?>

    <div class="text-container">
      <h4><?php the_title() ?></h4>
      <?php the_content() ?>
    </div>
  </div>
  <?php endwhile ?>
</div>
