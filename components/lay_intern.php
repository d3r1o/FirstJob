<?php
require "db.php";

$id = $_GET['id'];

$resume_query = $mysqli->query("SELECT id, name, surname FROM company WHERE id_user = \"$id\" ");
while($resume_result = $resume_query->fetch_assoc()){
    $resume = $resume_result;
}

$client_query = $mysqli->query("SELECT email FROM `users` WHERE id = \"$id\"");
while($client_result = $client_query->fetch_assoc()){
    $client = $client_result;
}

$save = $_POST;
if($save['job_security'] <> 1){
    $save['job_security'] = 0;
}

if(isset($save['save'])){
    $insert= $mysqli->query("INSERT INTO `internship` (`id`, `id_company`, `name_internship`, `start_date`, `end_date`, `industry`, `city`, `address`, `person_name-surname`, `email_person`, `study`, `course`, `schedule`, `salary`, `skills`, `tasks`, `conditions`, `job_security`)
 VALUES (NULL, '".$resume['id']."', '".$save['name_internship']."', '".$save['start_date']."', '".$save['end_date']."', '".$save['industry']."', '".$save['city']."', '".$save['address']."', '".$resume['surname']." ".$resume['name']."', '".$client['email']."', '".$save['study']."', '".$save['course']."', '".$save['schedule']."', '".$save['salary']."', '".$save['skills']."', '".$save['tasks']."', '".$save['conditions']."', '".$save['job_security']."');");
}

