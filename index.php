<?php
include "controller/database-handler.php";
include "model/navigation.php";
include "model/content.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"
        href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="view/css/bootstrap.min.css">
  <link rel="stylesheet" href="view/css/style.css">
  <script
    src="view/scripts/jquery.min.js"></script>
  <script
    src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="view/scripts/script.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed"
              data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="view/images/codebox.png" height="50px"/>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left" method="GET" role="search">
          <div class="input-group">
            <input type="text" class="form-control" name="q"
                   placeholder="Search">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><i
                          class="glyphicon glyphicon-search"></i></button>
                    </span>
          </div>
        </form>
        <li><a href="#">Hi, Damien Bone</a></li>
        <li class="dropdown ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"
             role="button" aria-expanded="false">
            Account
            <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class=""><a href="#">Profile</a></li>
            <li class=""><a href="#">Settings</a></li>
            <li class=""><a href="#">Help</a></li>
            <li class="divider"></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid main-container">
  <div class="col-md-2 sidebar">
    <div class="row">
      <!-- uncomment code for absolute positioning tweek see top comment in css -->
      <div class="absolute-wrapper"></div>
      <!-- Menu -->
      <div class="side-menu">
        <nav class="navbar navbar-inverse" role="navigation">
          <!-- Main Menu -->
          <div class="side-menu-container">
            <!-- Box List -->
            <?php
            $page_selected = isset($_GET['pageSelected']) ? urlencode($_GET['pageSelected']) : "dashboard";
            $box_selected = isset($_GET['boxSelected']) ? urlencode($_GET['boxSelected']) : 0;
            echo navigation_side($page_selected, $box_selected) ?>
          </div><!-- /.navbar-collapse -->
        </nav>
      </div>
    </div>
  </div>
  <div class="col-md-10 content">
    <?php echo content_main($page_selected, $box_selected); ?>
  </div>
  <footer class="pull-left footer">
    <p class="col-md-12">
    <hr class="divider">
    Copyright &COPY; 2016 <a href="http://www.djbdeveloper.com">Damien Bone (DJB
      Developer)</a>
    </p>
  </footer>
</div>

<!-- Modal -->
<div id="new-section-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"
                data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Section</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">
          Close
        </button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="new-element-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"
                data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Element</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">
          Close
        </button>
      </div>
    </div>

  </div>
</div>

</body>
</html>


