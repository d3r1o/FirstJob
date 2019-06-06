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



//    $update = $mysqli->query("UPDATE `student` SET `name` = ".$save['name'].", `surname` = ".$save['surname'].", `sex` = ".$save['sex'].",
//                                            `birthday` = ".$save['birthday'].", `nationality` = ".$save['nationality'].", `mobile_phone` = ".$save['mobile_phone']."
//                                    WHERE id_user = \"$id\" ");

//    $test['name'] = "Иванович";
//    echo $test['name'];
//    $jun = $mysqli->query("UPDATE `student` SET `surname` = ".$test['name']." WHERE id_user = \"$id\" ");

}


