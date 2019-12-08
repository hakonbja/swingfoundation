<div class="anchor" id="levels">

</div>
<div class="container">
  <div class="hide-overflow-x">
    <h3 class="orange-line">Levels</h3>
  </div>

  <div class="level-descriptions">
    <div class="lindy-hop dance-type">
      <h4>Lindy Hop</h4>

      <?php
      $args = array(
        'post_type' => 'classes',
        'orderby' => 'title',
        'order' => 'ASC',
        'meta_key' => 'class_type',
        'meta_value' => 'Lindy Hop',
      );

      $lindy = new WP_Query( $args );

      while ( $lindy -> have_posts() ) : $lindy -> the_post();
        $anchor = str_replace(array('/', ' '), array('', '-'), strtolower( get_the_title() ));
        
        echo '
          <div class="anchor" id="' . $anchor . '"></div>
          <div class="level">
            <h5 onClick="toggleLevel()">' . get_the_title() . '</h5>
            <div class="level-content">';
            the_content();
            get_template_part( 'partials/_reg-link');
        echo
            '</div>
          </div>';
      endwhile;
      wp_reset_postdata();
      ?>

    </div> <!-- class="lindy-hop dance-type" -->

    <div class="solo dance-type">
      <h4>Solo Jazz & Charleston</h4>
      <p class="italic">Heads up, your level as a solo dancer might differ from your level as a partner dancer. Please read the level description carefully and make an educated choice.</p>
      
      <?php
      $args = array(
        'post_type' => 'classes',
        'orderby' => 'menu_order title',
        'order' => 'ASC',
        'meta_key' => 'class_type',
        'meta_value' => 'Solo',
      );
      $solo = new WP_Query( $args );
      while ( $solo -> have_posts() ) : $solo -> the_post();
        $anchor = str_replace(array('/', ' '), array('', '-'), strtolower( get_the_title() ));
        
        echo '
          <div class="anchor" id="' . $anchor . '"></div>
          <div class="level">
            <h5 onClick="toggleLevel()">' . get_the_title() . '</h5>
            <div class="level-content">'; 
            the_content();
            get_template_part( 'partials/_reg-link');
        echo '
            </div>
          </div>';
        
      endwhile;
      wp_reset_postdata();
      ?>

    </div>
  </div>
</div>
