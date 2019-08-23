
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
        <div class="registration__buttons">
          <div class="btn btn-blue">
            <a href=<?php echo $linkMain ?> target="_blank">Weekly Classes</a> <!--Interested form: https://forms.gle/8wGR7a1nkDAv8U2SA -->
          </div>
          <div class="btn btn-white btn-border-blue">
            <a href="<?php echo $linkSecondary ?>" target="_blank">Crash Course</a>
          </div>
        </div>

      </div>
    </section>

    <section>
      <?php get_template_part( 'partials/_prices'); ?>
    </section>

  </div>
  <?php get_footer();?>
</body>
