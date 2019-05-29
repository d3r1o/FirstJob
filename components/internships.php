<?php
require "db.php";

$intern_query = $mysqli->query("SELECT a.*, b.* FROM internship a, company b WHERE a.id_company = b.id");

while($intern_result = $intern_query->fetch_assoc()){
    $data[] = $intern_result;
}




