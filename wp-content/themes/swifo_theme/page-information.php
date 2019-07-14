
<?php get_header();?>

  <div class="content information-page">

    <div class="anchor" id="about-us"></div>
    <div class="container about-us">
      <div class="hide-overflow-x">
        <h3 class="orange-line">About us</h3>
      </div>
      <?php $about_us = new WP_Query( 'page_id=11' ) // online id is 11, local id is 33 //can also use the slug! ?>
      <div class="img-container">
        <?php while ( $about_us -> have_posts() ) : $about_us -> the_post(); ?>
        <?php the_post_thumbnail(); ?>
        <?php $title = get_post(get_post_thumbnail_id()) -> post_title; ?>
        <p class="subtext"><?php echo $title ?></p>
        <?php endwhile; ?>
      </div>

      <!-- <div class="text-container">
        <p>We are Hákon, Sanne and Yara and Swing Foundation is our Amsterdam (east) based Swing Dance Movement that offers high intensity dance classes, lectures and workshops.</p>
        <p>We have been in the Amsterdam Swing Dancing scene since 2011/2012 and after years of organising local and international events, as well as teaching for multiple schools it was time to start our own initiative.</p>
        <p>We are known for our structured and precise way of working, strong technical foundation, high quality teaching, performances, and goofiness.</p>
      </div> -->

      <div class="text-container">
        <?php
        // $id=33;
        // $post = get_post($id);
        // $content = apply_filters('the_content', $post->post_content);
        // echo $content;
        ?>
        <?php while ( $about_us -> have_posts() ) : $about_us -> the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
      <div class="img-container">

      </div>

    </div>


    <div class="anchor" id="location"></div>
    <div class="location">
      <div class="container">
        <div class="hide-overflow-x">
          <h3 class="orange-line">Location</h3>
        </div>
      </div>
      <?php get_template_part( 'partials/_location'); ?>
    </div>


    <div class="anchor" id="contact"></div>
    <div class="contact-form container">
      <div class="hide-overflow-x">
        <h3 class="orange-line">Contact</h3>
      </div>
      <div class="text-container">
        <p>For questions, don’t forget to check out the <a href="<?php echo get_site_url(); ?>/faq">FAQ</a>.</p>
        <p>If you didn’t find an answer there feel free to ask us a question through the form below or our e-mail address <a href="mailto:info@swingfoundation.nl">info@swingfoundation.nl</a>.</p>
        <p>Feel free to write us in Dutch.</p>
      </div>
      <?php wpforms_display( 45, false, false ); // local forms id is 122, online form id is 45 ?>
    </div>



  </div>
  <?php get_footer();?>
</body>
