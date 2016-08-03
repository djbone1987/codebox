<?php $section_selected = isset($_GET['sectionSel']) ? urlencode($_GET['sectionSel']) : 0; ?>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Box: <?php echo box_name($box_selected); ?></h3>
    <form class="form-inline move-right" role="form"><a href="#"
                                                        class="btn btn-default"
                                                        data-toggle="modal"
                                                        data-target="#new-section-modal">New
        Section</a><a
        href="#" class="btn btn-default space-area" data-toggle="modal"
        data-target="#new-element-modal">New Element</a>
      <?php echo box_section_dropdown($box_selected, $section_selected); ?>
      </form>
  </div>
</div>

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion"
           href="#collapse1">
          Collapsible Group 1</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur
        adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad
        minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea
        commodo consequat.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion"
           href="#collapse2">
          String: Echo</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">Prints a string in the body of an HTML file.
        <div class="well well-sm">echo "<i>string</i>";</div>
        <p class="code-usage"><b>string</b> = Replace with the string you
          want to print in-line.</p>
        <button class="btn btn-default cx" data-toggle="collapse"
                data-target="#example1">Echo an Array
        </button>
        <button class="btn btn-default cx" data-toggle="collapse"
                data-target="#example2">Echo String
        </button>
        <button class="btn btn-default cx" data-toggle="collapse"
                data-target="#example3">Example 3
        </button>
        <button class="btn btn-default cx" data-toggle="collapse"
                data-target="#example4">Example 4
        </button>
        <button class="btn btn-default cx" data-toggle="collapse"
                data-target="#example5">Example 5
        </button>
        <button class="btn btn-default cx" data-toggle="collapse"
                data-target="#example6">Example 6
        </button>
        <div id="example1" class="collapse code-example">
          <div class="well well-sm">echo "<i>example1</i>";</div>
        </div>
        <div id="example2" class="collapse code-example">
          <div class="well well-sm">echo "<i>example2</i>";<br>//this is an
            example
          </div>
        </div>
        <div id="example3" class="collapse code-example">
          <div class="well well-sm">echo "<i>example3</i>";</div>
        </div>
        <div id="example4" class="collapse code-example">
          <div class="well well-sm">echo "<i>example4</i>";</div>
        </div>
        <div id="example5" class="collapse code-example">
          <div class="well well-sm">echo "<i>example5</i>";</div>
        </div>
        <div id="example6" class="collapse code-example">
          <div class="well well-sm">echo "<i>example6</i>";</div>
        </div>
      </div>

    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion"
           href="#collapse3">
          Collapsible Group 3</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur
        adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad
        minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea
        commodo consequat.
      </div>
    </div>
  </div>
</div>