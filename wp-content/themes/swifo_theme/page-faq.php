
<?php get_header();?>

  <div class="content info-page" id="info">


    <div class="container faq">
      <div class="faq__all">

      <?php
        $faqs = new WP_Query( array('post_type' => 'faq') );
        while ( $faqs -> have_posts() ) : $faqs -> the_post();
        $content = get_the_content();
        $content = strip_tags($content);
      ?>

        <div class="faq__single">
          <p class="faq__single__question"><?php the_title() ?></p>
          <p class="faq__single__answer"><?php echo $content ?></p>
        </div>

      <?php
        endwhile;
      ?>

        <div class="faq__single">
          <p class="faq__single__question">What should I wear?</p>
          <p class="faq__single__answer">Something that’s comfortable to move in :) Expect to sweat a bit so it might be nice to bring a towel and/or an extra shirt. Shoes that are specially made for swing dancing usually have a leather or suede sole. Most dancers prefer to dance in shoes without heel or with a low heel.</p>
        </div>
        <div class="faq__single">
          <p class="faq__single__question">How do I know what level to register for?</p>
          <p class="faq__single__answer">Start by reading the <a href="<?php echo get_site_url(); ?>/classes/#levels">level descriptions</a>. Even if you are an experienced dancer but haven’t taken swing dancing classes before we would recommend signing up for the beginner level. Every (partner)dance is different and has its own foundations, footwork basics and connection points. The teachers always customize and adjust the speed of the class to the students who are in the class. Next to that it’s always possible to receive extra challenges and feedback.</p>
        </div>
        <div class="faq__single">
          <p class="faq__single__question">Do I need a partner?</p>
          <p class="faq__single__answer">For partner dancing classes we aim for a nice balance between followers and leaders. If you register without a partner you’ll end up on the waiting list until we can match your registration to someone with the other dancing role. In class we rotate dance partners so you will really learn to lead/follow. It also creates a similar situation as a social dance floor at swing dance parties :)</p>
        </div>
        <!-- <div class="faq__single">
          <p class="faq__single__question">Can I join a class as a try-out?</p>
          <p class="faq__single__answer">When your registration is confirmed you can join the first class of the block as a try-out. We expect your payment for the full block of classes before class 2.</p>
        </div> -->
        <div class="faq__single">
          <p class="faq__single__question">How do I pay?</p>
          <p class="faq__single__answer">You can pay by bank transfer, card or cash. Please read the instructions in our confirmation email carefully.</p>
        </div>
        <div class="faq__single">
          <p class="faq__single__question">Are there any discounts?</p>
          <p class="faq__single__answer">10% discount for students. The second course you follow in the same block is 25% off. See <a href="<?php echo get_site_url(); ?>/registration/#prices">Prices</a></p>
        </div>
        <div class="faq__single">
          <p class="faq__single__question">What is your refund policy?</p>
          <p class="faq__single__answer">If Swing Foundation decides to cancel a block (or a number of classes) you’ll get refunded for those classes. We do not refund classes missed by the participant.</p>
        </div>
      </div>
    </div>


  </div>
  <?php get_footer();?>
</body>
