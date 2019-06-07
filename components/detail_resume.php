<?php
require "db.php";
$id = $_GET['id'];

$resume_query = $mysqli->query("SELECT *  FROM `resume` WHERE id = \"$id\"  ");

while($resume_result = $resume_query->fetch_assoc()){
    $resume = $resume_result;

}

