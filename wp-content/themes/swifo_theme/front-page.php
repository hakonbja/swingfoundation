

<?php get_header();?>

<div class="content front-page">

  <div class="jumbotron container-fluid" id="js-jumbotron">
    <img class="jumbotron__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-big.svg" alt="Swing Foundation Logo">
  </div>



  <div class="container">
    <div class="introduction padding-rl-1col">
      <h4>Swing Foundation is an Amsterdam based movement that promotes the history and culture of Swing dancing through workshops, lectures and weekly classes.</h4>
    </div>
  </div>

  <section class="getting-started">
    <div class="container">
      <h1 class="minibar mb-seablue fp-section-header">Getting started</h1>
    </div>
    <div class="box-blue extend-left-full extend-right-col container">
      <div class="col-left">
        <p class="big">A good way to start dancing is to join our Lindy Hop or Charleston classes for beginners.</p>
        <div class="front-page__buttons">
          <div class="btn btn-white">
            <a href="<?php echo get_site_url(); ?>/registration">Registration</a>
          </div>
          <div class="btn btn-blue btn-border-white">
            <a href="<?php echo get_site_url(); ?>/classes">Classes</a>
          </div>
        </div>
      </div>
      <div class="col-right">
        <div class="box-white">
          <h3 class="next-course">Next&nbsp;course starts&nbsp;on</h3>
          <h3 class="date">4th&nbsp;of </br><span class="month">June</span></br>2019</h3>
          <img class="sax" src="<?php echo get_template_directory_uri(); ?>/assets/img/sax_with_soundlines.svg" alt="saxophone">
        </div>
      </div>
    </div>

  </section>

  <section class="classes">
    <div class="hide-overflow-x">
      <div class="container">
        <h1 class="minibar mb-orange fp-section-header">Classes</h1>
        <div class="bar bar-seablue extend-right-full extend-left-col">
          <p class="big subheading">These are the classes we offer</p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="classes-all">
        <ul>
          <li class="class">
            <!-- <p class="class__time">Tuesdays at 18:30-19:45</p> -->
            <p class="class__name">Lindy Hop Beginners</p>
            <a class="class__button" href="<?php echo get_site_url(); ?>/classes/#lh-beginners">Level description</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lindyfeet1.jpg" alt="legs of dancers">
          </li>
          <li class="class">
            <!-- <p class="class__time">Tuesdays at 19:45-21:00</p> -->
            <p class="class__name">Lindy Hop Beginners+</p>
            <a class="class__button" href="<?php echo get_site_url(); ?>/classes/#lh-beginners+">Level description</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lindyfeet3.jpg" alt="legs of dancers">
          </li>
          <li class="class">
            <!-- <p class="class__time">Tuesdays at 21:00-22:15</p> -->
            <p class="class__name">Lindy Hop Advanced+</p>
            <a class="class__button" href="<?php echo get_site_url(); ?>/classes/#lh-adv+">Level description</a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lindyfeet2.jpg" alt="legs of dancers">
          </li>
        </ul>
      </div>
    </div>

  <!--
    <div id="slider" class="slider">
      <div class="wrapper">
        <div id="items" class="items">
          <span class="slide">
            <li class="class">
              <p>Lindy Hop Beginners</p>
              <a href="<?php echo get_site_url(); ?>/classes/#lh-beginners">Level description</a>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lindyfeet1.jpg" alt="legs of dancers">
            </li>
          </span>
          <span class="slide">
            <li class="class">
              <p>Lindy Hop Beginners+</p>
              <a href="<?php echo get_site_url(); ?>/classes/#lh-beginners-cont">Level description</a>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lindyfeet1.jpg" alt="legs of dancers">
            </li>
          </span>
          <span class="slide">
            <li class="class">
              <p>Lindy Hop Advanced+</p>
              <a href="<?php echo get_site_url(); ?>/classes/#lh-adv+">Level description</a>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lindyfeet2.jpg" alt="legs of dancers">
            </li>
          </span>

        </div>
      </div>
      <a id="prev" class="control prev"><</a>
      <a id="next" class="control next">></a>

    </div>
  -->
    <div class="container">
      <div class="bar bar-seablue extend-left-full extend-right-col">
        <?php wp_nav_menu( array( 'theme_location' => 'quicklinks', 'container_class' => 'quick-links') ); ?>
        <img class="bounce" src="<?php echo get_template_directory_uri(); ?>/assets/img/bounce.svg" alt="dotted line">
      </div>
    </div>


  </section>

  <section class="location">
    <div class="container">
      <h1 class="minibar mb-seablue fp-section-header">Location</h1>
    </div>
    <?php get_template_part( 'partials/_location'); ?>
  </section>

  <section class="newsletter-signup">
    <div class="hide-overflow-x">
      <div class="container">
        <h1 class="minibar mb-orange fp-section-header">Newsletter</h1>
        <div class="bar bar-seablue extend-left-col extend-right-full">
          <p class="big subheading">Subscribe to our newsletter to stay in touch</p>
        </div>
      </div>
    </div>

    <div class="container">


      <!-- Begin Mailchimp Signup Form -->
      <div id="mc_embed_signup">
      <form action="https://swingfoundation.us19.list-manage.com/subscribe/post?u=10ad7729e889b6568ffe433ab&amp;id=643c6466d5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
            <div class="mc-field-group">
            	<input type="email" value="" placeholder="Email Address" name="EMAIL" class="required email" id="mce-EMAIL" aria-label="Email Address">
            </div>
          	<div id="mce-responses" class="clear">
          		<div class="response" id="mce-error-response" style="display:none"></div>
          		<div class="response" id="mce-success-response" style="display:none"></div>
          	</div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input type="text" name="b_10ad7729e889b6568ffe433ab_643c6466d5" tabindex="-1" value="">
              </div>
              <div class="clear">
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-blue">
                <img class="trumpet" src="<?php echo get_template_directory_uri(); ?>/assets/img/trumpet.svg" alt="trumpet">

              </div>
          </div>
      </form>
      </div>
      <!--End mc_embed_signup-->

    </div>

  </section>



</div> <!-- content -->
<?php get_footer(); ?>

</body>
</html>
