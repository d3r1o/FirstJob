<?
require "db.php";

$id = $_GET['id'];

$crew_query = $mysqli->query("SELECT * FROM company WHERE id_user = \"$id\"");
while ($crew_result = $crew_query->fetch_assoc()) {
    $crew = $crew_result;
}

$save = $_POST;

if (isset($save['save'])) {


//    $update = $mysqli->query("UPDATE `student` SET `name` = 'Родион1', `surname` = 'Иванов1', `sex` = 'Мужской',
//                                            `birthday` = '2019-06-29', `nationality` = 'Россия', `mobile_phone` = '+792815025881'
//                                    WHERE `student`.`id` = 15;");
}



