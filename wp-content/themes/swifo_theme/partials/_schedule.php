
<div class="container anchor" id="schedule"></div>
<div class="container">
  <div class="hide-overflow-x">
    <h3 class="orange-line">Schedule</h3>
  </div>
</div>
  <div id="js-tabs-content" class="tabs-n-content container">

    <div class="tabs">
      <ul>
        <li class="tab-5">Block 5<span class="year">2019</span></li>
        <li class="tab-6 selected">Block 1<span class="year">2020</span></li>
        <li class="tab-2">Block 2</li>
        <li class="tab-3 disabled">Block 3</li>
      </ul>
    </div>

    <div class="schedule__wrapper content-4">
      <?php get_template_part( 'partials/_schedule__block-4'); ?>
    </div>

    <div class="schedule__wrapper content-5">
      <?php get_template_part( 'partials/_schedule__block-5'); ?>
    </div>

    <div class="schedule__wrapper content-6 selected">
      <?php get_template_part( 'partials/_schedule__block-1-2020'); ?>
    </div>

    <div class="schedule__wrapper content-2">
      <?php get_template_part( 'partials/_schedule__block-2-2020'); ?>
    </div>
</div>
