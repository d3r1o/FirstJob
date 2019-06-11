<?
require "db.php";

$id = $_GET['id'];

$crew_query = $mysqli->query("SELECT * FROM company WHERE id_user = \"$id\"");
while ($crew_result = $crew_query->fetch_assoc()) {
    $crew = $crew_result;
}

$save = $_POST;

if (isset($save['save'])) {


}



