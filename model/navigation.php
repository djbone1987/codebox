<?php

/**
 * Created by PhpStorm.
 * User: temp
 * Date: 11/07/2016
 * Time: 22:25
 */
$current_user_id = 1;

function user_details() {

}

function navigation_box_list($box_selected) {

  global $current_user_id;
  global $connection;


  $query = "SELECT * FROM codebox_box WHERE user_id = {$current_user_id}";
  $box_list = mysqli_query($connection, $query);
  $output = "";

  while ($box = mysqli_fetch_assoc($box_list)) {
    if ($box['box_id'] == $box_selected) {
      $output .= "<li class='active'><a href='?pageSelected=openBox&boxSelected=" . $box['box_id'] . "'> " . $box['box_name'] . "</a></li>";
    }
    else {
      $output .= "<li><a href='?pageSelected=openBox&boxSelected=" . $box['box_id'] . "'> " . $box['box_name'] . "</a></li>";

    }
  }


  return $output;
}

function navigation_side($page_selected, $box_selected) {

  $output = "<ul class='nav nav-pills nav-stacked'>";

  switch ($page_selected) {
    case "dashboard":
      $output .= "<li class='active'><a href='?pageSelected=dashboard'> Dashboard</a></li>";
      $output .= navigation_box_list(0);
      break;
    case "openBox":
      $output .= "<li><a href='?pageSelected=dashboard'> Dashboard</a></li>";
      $output .= navigation_box_list($box_selected);
      break;
  }

  $output .= "</ul>";

  return $output;

}