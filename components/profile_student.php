<?
require "db.php";

$id = $_GET['id'];

$profile_query = $mysqli->query("SELECT * FROM student WHERE id_user = \"$id\"");
while($profile_result = $profile_query->fetch_assoc()){
    $profile = $profile_result;
}

$education_query = $mysqli->query("SELECT * FROM education WHERE id_student = ".$profile['id']." ");
while($education_result = $education_query->fetch_assoc()){
    $education = $education_result;
}
$profile['education'] = $education;


$save = $_POST;

if(isset($save['save'])){

}