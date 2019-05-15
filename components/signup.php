<?php 
require "./db.php";

$data = $_POST;

if(isset($data['signup'])){
	//регистрируем
	$errors = array();
	
	if($data['email'] == ''){
		$errors[] = 'Введите почту';
	}
	if($data['password'] == ''){
		$errors[] = 'Введите пароль';
	}
	if($data['password_again'] == ''){
		$errors[] = 'Введите пароль повторно';
	}
	if($data['password_again'] != $data['password']){
		$errors[] = 'Пароли не совпадают';
	}
	
	if(empty($errors)){
		//все хорошо, регистрируем 
	}else{
		$errors_result = array_shift($errors);
	}
}

?>