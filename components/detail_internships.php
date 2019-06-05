<?php
require "db.php";

$id = $_GET['id'];

$intern_query = $mysqli->query("SELECT * FROM internship a, company b WHERE a.id_company = b.id AND id_company = \"$id\"");

while($intern_result = $intern_query->fetch_assoc()){
    $intern = $intern_result;
}
