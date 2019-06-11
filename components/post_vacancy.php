<?php
require "db.php";

$id = $_GET['id'];


$resume_query = $mysqli->query("SELECT id FROM company WHERE id_user = \"$id\" ");
while($resume_result = $resume_query->fetch_assoc()){
    $resume = $resume_result;
}


$save = $_POST;


if(isset($save['save'])){
    $insert= $mysqli->query("INSERT INTO `vacancy` (`id`, `id_company`, `name`, `specialization`, `description`, `key_skills`, `income_level`, `type_employment`, `schedule`, `city`, `address`)
                                    VALUES (NULL, '".$resume['id']."', '".$save['name']."', '".$save['specialization']."', '".$save['description']."', '".$save['key_skills']."', '".$save['income_level']."', '".$save['type_employment']."', '".$save['schedule']."', '".$save['city']."', '".$save['address']."')");
}

