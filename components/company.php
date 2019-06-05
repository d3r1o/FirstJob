<?php
require "db.php";
$company_query = $mysqli->query("SELECT id, name_org, activity, city, mobile_phone FROM company");

while($company_result = $company_query->fetch_assoc()){
    $data[] = $company_result;
}

