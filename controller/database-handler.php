<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "98eca9f");
define("DB_NAME", "codebox");

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_errno()) { //if there is an error number
    die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
}

