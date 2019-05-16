<?php 
session_start();
if(isset($_SESSION['logged_user'])) : ?>
	Авторизован
	<a href="/components/logout.php">Выйти</a>
	<? else : 
	define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

$router = new Router();
$router->run();
	 endif; ?> 
