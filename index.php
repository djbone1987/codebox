<?php
include "controller/database-handler.php";
include "model/box-views.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="view/scripts/script.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
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
                        <input type="text" class="form-control" name="q" placeholder="Search">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                    </div>
                </form>
                <li><a href="#">Hi, Damien Bone</a></li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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
                            <?php echo box_navigation($_GET['box']); ?>
                    </div><!-- /.navbar-collapse -->
                </nav>

            </div>
        </div>
    </div>
    <div class="col-md-10 content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Box: PHP</h3>
                <form class="form-inline move-right" role="form"><a href="#" class="btn btn-default" data-toggle="modal" data-target="#new-section-modal">New Section</a><a
                        href="#" class="btn btn-default space-area" data-toggle="modal" data-target="#new-element-modal">New Element</a><select
                        class="form-control space-area filter-by-select" id="select">
                        <option>String</option>
                        <option>Variables</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select></form>
            </div>
        </div>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            Collapsible Group 1</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            String: Echo</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">Prints a string in the body of an HTML file.
                        <div class="well well-sm">echo "<i>string</i>";</div>
                        <p class="code-usage"><b>string</b> = Replace with the string you want to print in-line.</p>
                        <button class="btn btn-default cx" data-toggle="collapse" data-target="#example1">Echo an Array</button>
                        <button class="btn btn-default cx" data-toggle="collapse" data-target="#example2">Echo String</button>
                        <button class="btn btn-default cx" data-toggle="collapse" data-target="#example3">Example 3</button>
                        <button class="btn btn-default cx" data-toggle="collapse" data-target="#example4">Example 4</button>
                        <button class="btn btn-default cx" data-toggle="collapse" data-target="#example5">Example 5</button>
                        <button class="btn btn-default cx" data-toggle="collapse" data-target="#example6">Example 6</button>
                        <div id="example1" class="collapse code-example">
                            <div class="well well-sm">echo "<i>example1</i>";</div>
                        </div>
                        <div id="example2" class="collapse code-example">
                            <div class="well well-sm">echo "<i>example2</i>";<br>//this is an example</div>
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
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            Collapsible Group 3</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="pull-left footer">
        <p class="col-md-12">
        <hr class="divider">
        Copyright &COPY; 2016 <a href="http://www.djbdeveloper.com">Damien Bone (DJB Developer)</a>
        </p>
    </footer>
</div>

<!-- Modal -->
<div id="new-section-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Section</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Element</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

</body>
</html>


