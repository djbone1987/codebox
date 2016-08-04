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

function section_name($section_selected) {

  global $connection;
  global $current_user_id;


  $query = "SELECT * FROM box_section";
  $query .= " WHERE section_id = {$section_selected}";
  $query .= " AND user_id = {$current_user_id}";
  $query .= " LIMIT 1";
  $section_details = mysqli_query($connection, $query);
  $section = mysqli_fetch_assoc($section_details);

  $section_name = $section['section_name'];

  return $section_name;
}

function section_snippet_values($snippet_values) {

  $snippet_value_array = explode(',', $snippet_values);

  foreach ($snippet_value_array as $item) {
    echo $item . "<br />";
  }

}

function element_examples($element_current) {

  global $connection;
  global $current_user_id;


  $query = "SELECT * FROM element_example";
  $query .= " WHERE element_id = {$element_current}";
  /*  $query .= " AND user_id = {$current_user_id}";*/
  $element_example = mysqli_query($connection, $query);

  while ($element_example_button = mysqli_fetch_assoc($element_example)) {

    echo "<button class='btn btn-default cx' data-toggle='collapse'
                  data-target='#example" . $element_example_button['example_id'] . "'>" . $element_example_button['example_title'] . "</button>";

  }

  $query = "SELECT * FROM element_example";
  $query .= " WHERE element_id = {$element_current}";
  /*  $query .= " AND user_id = {$current_user_id}";*/
  $element_example = mysqli_query($connection, $query);

  while ($element_example_code = mysqli_fetch_assoc($element_example)) {

    echo "<div id='example" . $element_example_code['example_id'] . "' class='collapse code-example'>
            <div class='well well-sm'>" . $element_example_code['example_code'] . "</div>
          </div>";

  }

}

function box_sections($section_selected,$box_selected) {

  global $connection;
  global $current_user_id;

  $query = "SELECT * FROM section_element";

if ($section_selected == "undefined" || empty($section_selected)) {
  $section_selected = 0;
}

  $query .= " WHERE user_id = {$current_user_id}";
  $query .= " AND box_id = {$box_selected}";
  if ($section_selected > 0) {
    $query .= " AND section_id = {$section_selected}";
  }
  $section_details = mysqli_query($connection, $query);

  while ($section_array = mysqli_fetch_assoc($section_details)) {


    echo "<div class='panel panel-default'>";
    echo "<div class='panel-heading'>";
    echo "<h4 class='panel-title'>";
    echo "<a data-toggle='collapse' data-parent='#accordion' href='#collapse" . $section_array['element_id'] . "'>";
    echo section_name($section_array['section_id']) . ": " . $section_array['element_name'];
    echo "</a></h4>";
    echo "</div>";
    echo "<div id='collapse" . $section_array['element_id'] . "' class='panel-collapse collapse'>";
    echo "<div class='panel-body'>";
    echo $section_array['element_description'];
    echo "<div class='well well-sm'>" . $section_array['element_snippet'] . "</div>";
    echo "<p class='code-usage'>" . section_snippet_values($section_array['element_snippet_values']) . "</p>";
    echo element_examples($section_array['element_id']) . "";
    echo "</div>";
    echo "</div>";
    echo "</div>";
  }

  return $section_array;
}


function box_section_dropdown($box_selected, $section_selected) {

  global $connection;
  global $current_user_id;

  $output = "<select class=\"form-control space-area filter-by-select\" id=\"section-selector\" onchange=\"changeSection(this)\">";


  if ($section_selected == 0 || empty($section_selected)) {
    $output .= "<option value='0' selected='selected'>";
    $output .= "All Sections";
    $output .= "</option>";
    $section_selected = -1;
  }
  else {

    $output .= "<option value='0' selected='selected'>";
    $output .= "All Sections";
    $output .= "</option>";

  }


  $query = "SELECT * FROM box_section";
  $query .= " WHERE box_id = {$box_selected}";
  $query .= " AND user_id = {$current_user_id}";
  $query .= " ORDER BY section_name ASC";
  $box_sections = mysqli_query($connection, $query);

  while ($section = mysqli_fetch_assoc($box_sections)) {


    if ($section['section_id'] == $section_selected) {
      $output .= "<option value='";
      $output .= $section['section_id'];
      $output .= "' selected='selected' ";
      $output .= ">" . $section['section_name'] . "</option>";
    }
    else {
      $output .= "<option value='";
      $output .= $section['section_id'];
      $output .= "'>";
      $output .= $section['section_name'];
      $output .= "</option>";

    }
  }
  $output .= "</select>";

  return $output;

}
