
<?php $section_selected = isset($_POST['section_selector']) ? $_POST['section_selector'] : 0; ?>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Box: <?php echo box_name($box_selected); ?></h3>
    <form name="section_filter" class="form-inline move-right" role="form" action="?pageSelected=openBox&boxSelected=<?php echo $box_selected; ?>" method="post"><a href="#"
                                                        class="btn btn-default"
                                                        data-toggle="modal"
                                                        data-target="#new-section-modal">New
        Section</a><a
        href="#" class="btn btn-default space-area" data-toggle="modal"
        data-target="#new-element-modal">New Element</a>
      <?php echo box_section_dropdown($box_selected, $section_selected); ?>
      <noscript>
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Filter</button>
      </span>
        </noscript>
      </form>
  </div>
</div>
<div id="section-content">
<div class="panel-group" id="accordion">
  <?php echo box_sections($section_selected,$box_selected); ?>
</div>
  </div>