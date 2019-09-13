
<?php get_header();?>

  <div class="content info-page" id="info">


    <div class="container faq">
      <div class="faq__all">

      <?php
        $faqs = new WP_Query( array('post_type' => 'faq') );
        while ( $faqs -> have_posts() ) : $faqs -> the_post();
        $content = get_the_content();
      ?>

        <div class="faq__single">
          <p class="faq__single__question"><?php the_title() ?></p>
          <p class="faq__single__answer"><?php the_content() ?></p>
        </div>

      <?php
        endwhile;
      ?>

      </div>
    </div>

  </div>
  <?php get_footer();?>
</body>
