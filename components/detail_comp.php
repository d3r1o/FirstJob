<?php
require "db.php";

$id = $_GET['id'];
$bunch_query = $mysqli->query("SELECT * FROM company WHERE id = \"$id\" ");

while($bunch_result = $bunch_query->fetch_assoc()){
    $bunch = $bunch_result;
}

