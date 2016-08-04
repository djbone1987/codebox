<?php
include "../../controller/database-handler.php";
include "../../model/navigation.php";
include "../../model/content.php";
?>

<div class="panel-group" id="accordion">
   <?php
   $box_selected = $_GET['boxSelected'];
     $section = isset($_GET['id']) ? $_GET['id'] : 0;
   echo box_sections($section,$box_selected); ?>
  </div>