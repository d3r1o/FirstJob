<?php
require "db.php";

$id = $_GET['id'];
$only = $_GET['only'];


$intern_query = $mysqli->query("SELECT * FROM internship a, company b WHERE a.id_company = b.id AND a.id_company = \"$id\" AND a.id = \"$only\" ");

while($intern_result = $intern_query->fetch_assoc()){
    $intern = $intern_result;
}


