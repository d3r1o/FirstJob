<?php
require "db.php";

$id = $_GET['id'];
$only = $_GET['only'];

$comp_query = $mysqli->query("SELECT a.name AS title, a.*, b.* FROM vacancy a, company b WHERE a.id_company = b.id AND a.id_company  = \"$id\" AND a.id = \"$only\" ");

while($comp_result = $comp_query->fetch_assoc()){
    $comp = $comp_result;
}

