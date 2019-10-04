
<?php
  get_header();
  while ( have_posts() ) : the_post();
    $interestedUrl = get_post_meta(get_the_id(), "interested_form_url", true);
  endwhile;
  
  $args = array(
    'post_type' => 'events',
    'meta_key' => 'reg_start_date',
    'orderby' => 'meta_value',
    'order' => 'ASC',
    'meta_query' => array (
      'relation' => 'AND',
      array (
        'key' => 'reg_start_date',
        'value' => date('Y-m-d', strtotime('today')),
        'compare' => '<=',
        'type' => 'DATE'
      ),
      array(
        'key' => 'reg_end_date',
        'value' => date('Y-m-d', strtotime('today')),
        'compare' => '>=',
        'type' => 'DATE'
      )
    )
  );

  $open_registrations = new WP_Query( $args );
?>

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

          <?php
            if ( $open_registrations -> have_posts() ) {
              echo '<ul>';
              while ( $open_registrations -> have_posts() ) : $open_registrations -> the_post();
                $title = get_post_meta(get_the_id(), 'reg_title', true);
                $form_url = get_post_meta(get_the_id(), 'reg_form_url', true);
                $event_url = get_permalink();
                
                echo '
                  <li>
                    <h5>' . $title . '</h5>
                    <div class="reg-buttons">
                      <div class="btn btn--blue btn--small"><a href="' . $form_url . '" target="_blank" rel="noopener noreferrer">Register</a></div>
                      <div class="btn btn__border--blue btn--small"><a href="' . $event_url . '">More info</a></div>
                    </div>
                  </li>
                ';
                
              endwhile;
              echo '
                </ul>
                <p><em>Are you interested in something else? Let us know by filling in <a href="' . $interestedUrl . '" target="_blank" rel="noopener noreferrer">this form</a>.</em></p>
              ';
            } else {
              echo '
                <p><em>There are no open registrations at the moment but you can let us know what you\'re interested in by filling in <a href="' . $interestedUrl . '" target="_blank" rel="noopener noreferrer">this form</a>.</em></p>
              ';
            }
          wp_reset_postdata();
        ?>

        </div>

      </div>
    </section>

    <section>
      <?php get_template_part( 'partials/_prices'); ?>
    </section>

  </div>
  <?php get_footer();?>
</body>
