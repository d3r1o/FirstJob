<?php
require "db.php";
$count_query = $mysqli->query("SELECT COUNT(id) as count FROM internship");
$count_result = $count_query->fetch_assoc();
$count = $count_result['count'];


$intern_query = $mysqli->query("SELECT a.id AS only, a.*, b.* FROM internship a, company b WHERE a.id_company = b.id");

while($intern_result = $intern_query->fetch_assoc()){
    $data[] = $intern_result;
}


