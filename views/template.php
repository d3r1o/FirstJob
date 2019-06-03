<?php
session_start();
if(isset($_SESSION['login'])){
    require(ROOT. '/views/inner/firstjob.php');
}else{
    require(ROOT. '/views/main/firstjob.php');
}
?>

