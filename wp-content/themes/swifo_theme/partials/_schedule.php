
<div class="container anchor" id="schedule"></div>
<div class="container">
  <div class="hide-overflow-x">
    <h3 class="orange-line">Schedule</h3>
  </div>
</div>
  <div id="js-tabs-content" class="tabs-n-content container">

    <div class="tabs">
      <ul>
        <li class="tab-1 disabled">Block 1</li>
        <li class="tab-2">Block 2</li>
        <li class="tab-3">Block 3</li>
        <li class="tab-4 selected">Block 4</li>
        <li class="tab-5">Block 5</li>
      </ul>
    </div>
    
    <div class="schedule__wrapper content-1"></div>

    <div class="schedule__wrapper content-2">
      <?php get_template_part( 'partials/_schedule__block-2'); ?>
    </div>

    <div class="schedule__wrapper content-3">
      <?php get_template_part( 'partials/_schedule__block-3'); ?>
    </div>

    <div class="schedule__wrapper content-4 selected">
      <?php get_template_part( 'partials/_schedule__block-4'); ?>
    </div>

    <div class="schedule__wrapper content-5 ">
      <?php get_template_part( 'partials/_schedule__block-5'); ?>
    </div>
    
  <div class="schedule__wrapper content-5"></div>

</div>
