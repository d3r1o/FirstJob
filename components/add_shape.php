<?php
require "db.php";

$id = $_GET['id'];

$resume_query = $mysqli->query("SELECT id FROM student  WHERE id_user = \"$id\" ");
while($resume_result = $resume_query->fetch_assoc()){
    $resume = $resume_result;
}

$save = $_POST;
if(isset($save['save'])){
    $insert= $mysqli->query("INSERT INTO `resume` (`id`, `name_resume`, `id_student`, `area`, `about_me`, `key_skills`, `language`) 
                                    VALUES (NULL, '".$save['name_resume']."', '".$resume['id']."', '".$save['area']."', '".$save['about_me']."', '".$save['key_skills']."', '".$save['language']."');");
}

