<?php
/**
 * Created by PhpStorm.
 * User: damienbone
 * Date: 03/08/16
 * Time: 11:47
 */

function content_main($page_selected, $box_selected) {

  $page_content = "";

  switch ($page_selected) {
    case "dashboard":
      $page_content = include("templates/dashboard.php");
      break;
    case "openBox":
      $page_content = include("templates/box-view.php");
      break;
  }

  return $page_content;

}

function box_name($box_selected) {

  global $connection;
  global $current_user_id;


  $query = "SELECT * FROM codebox_box";
  $query .= " WHERE box_id = {$box_selected}";
  $query .= " AND user_id = {$current_user_id}";
  $query .= " LIMIT 1";
  $box_details = mysqli_query($connection, $query);
  $box = mysqli_fetch_assoc($box_details);

  $box_name = $box['box_name'];

  return $box_name;
}

function box_section_dropdown($box_selected, $section_selected) {

  global $connection;
  global $current_user_id;

  $output = "<select class=\"form-control space-area filter-by-select\" id=\"section-selector\">";

  $query = "SELECT * FROM box_section";
  $query .= " WHERE box_id = {$box_selected}";
  $query .= " AND user_id = {$current_user_id}";
  $query .= " ORDER BY section_name ASC";
  $box_sections = mysqli_query($connection, $query);

  while ($section = mysqli_fetch_assoc($box_sections)) {

    if ($section_selected == 0) {
      $output .= "<option value='{$section['section_id']}' selected='selected'>";
      $output .= $section['section_name'];
      $output .= "</option>";
      $section_selected = -1;
    }
    else {
      if ($section['section_id'] == $section_selected) {
        $output .= "<option value='";
        $output .= $section['section_id'];
        $output .="' selected='selected' ";
        $output .= "onchange='changeSection(";
        $output .= $section['section_id'];
        $output .= ")>" . $section['section_name'] . "</option>";
      }
      else {
        $output .= "<option value='";
        $output .= $section['section_id'];
        $output .= "' onchange='changeSection(";
        $output .= $section['section_id'];
      $output .= ")'>";
        $output .= $section['section_name'];
        $output .= "</option>";

      }
    }
  }
  $output .= "</select>";

  return $output;

}
