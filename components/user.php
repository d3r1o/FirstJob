<?
require "db.php";
session_start();

$users = $_SESSION['login'];



$check_query = $mysqli->query("SELECT b.name, b.abode FROM users a, student b WHERE a.id = b.id_user AND a.id = ".$users['id']." ");
while($check_result = $check_query->fetch_assoc()){
    $user = $check_result;
    $type = "Студент";
    $user['type'] = $type;
}

if(empty($user_id)){
    $check_query = $mysqli->query("SELECT b.name, b.city FROM users a, company b WHERE a.id = b.id_user AND a.id = ".$users['id']." ");
    while($check_result = $check_query->fetch_assoc()){
        $user  = $check_result;
        $type = "Компания";
        $user['type'] = $type;
    }
}

?>