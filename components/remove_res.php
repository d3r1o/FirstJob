<?php
require "db.php";

$id = $_GET['id'];


$remove = $mysqli->query("DELETE FROM `resume` WHERE `resume`.`id` = \"$id\"");

