<?php

/**
 * Created by PhpStorm.
 * User: temp
 * Date: 11/07/2016
 * Time: 22:25
 */
$current_user_id = 1;

function user_details()
{
    
}

function box_navigation($box_selected)
{
    global $current_user_id;
    global $connection;
    $output = "";

    $query = "SELECT * FROM codebox_box WHERE user_id = {$current_user_id}";
    $box_list = mysqli_query($connection, $query);

    $output .= "<ul class='nav nav-pills nav-stacked'>";

    while ($box = mysqli_fetch_assoc($box_list)) {
        if ($box['box_id'] == $box_selected) {
            $output .= "<li class='active'><a href='?box=" . $box['box_id'] ."'> " . $box['box_name'] . "</a></li>";
        } else {
            $output .= "<li><a href='?box=" . $box['box_id'] ."'> " . $box['box_name'] . "</a></li>";

        }
    }

    $output .= "</ul>";

    return $output;

}