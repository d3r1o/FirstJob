<?php
require "db.php";

$id = $_GET['id'];

$intern_query = $mysqli->query("SELECT * FROM internship WHERE id_company = \"$id\"");


while($intern_result = $intern_query->fetch_assoc()){
    $data[] = $intern_result;
}

