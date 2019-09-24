
<?php get_header();
  while ( have_posts() ) : the_post();
    $linkMain = get_post_meta(get_the_id(), "registration_form_url", true);
    $linkSecondary = get_post_meta(get_the_id(), "2nd_button", true);?>
  <?php endwhile; ?>

  <div class="content registration-page" id="registration">

    <section>
      <div class="anchor" id="reg-process"></div>
      <div class="container reg-process">
        <div class="hide-overflow-x">
          <h3 class="orange-line">Registration process</h3>
        </div>

        <ol>
          <li>Decide which class(es) you'd like to follow</li>
          <li>Fill in the registration form (your partner as well!)</li>
          <li>Wait for an e-mail from us</li>
        </ol>

        <div class="open-registrations">
          <h4>Open registrations</h4>
          <ul>
            <li><h5>Weekly classes - Block 5</h5><div class="reg-buttons"><div class="btn btn-blue btn-small"><a>Register</a></div><div class="btn btn-border-blue btn-small"><a>More info</a></div></div></li>
          </ul>
        </div>

      </div>
    </section>

    <section>
      <?php get_template_part( 'partials/_prices'); ?>
    </section>

  </div>
  <?php get_footer();?>
</body>
