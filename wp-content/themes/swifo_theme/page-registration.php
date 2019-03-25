
<?php get_header();?>

  <div class="content registration-page" id="registration">

    <section>
      <div class="anchor" id="reg-process">
      </div>
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
            <a href="https://goo.gl/forms/RTX25hl7SktjKJxl2" target="_blank">Register</a>
          </div>
          <div class="btn btn-white btn-border-blue">
            <a href="<?php echo get_site_url(); ?>/classes/#levels">Classes</a>
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
