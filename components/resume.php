<?php
require "db.php";
$id = $_GET['id'];

$resume_query = $mysqli->query("SELECT a.id, a.name_resume, a.area, a.key_skills  FROM `resume` a, student b WHERE a.id_student = b.id AND b.id_user = \"$id\"  ");

while($resume_result = $resume_query->fetch_assoc()){
    $resume[] = $resume_result;

}

