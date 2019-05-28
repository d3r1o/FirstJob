<?php 
require "db.php";

$data = $_POST;

if(isset($data['signup_student'])){
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

	$email = $data['email'];
	$em_check = $mysqli->query("SELECT COUNT(`email`) as count FROM `users` WHERE `email` = \"$email\"");
	while($em_result = $em_check->fetch_array()){
		$em = $em_result['count'];
	}

	if($em > 0){
		$errors[] = 'Пользователь с таким email уже существует';
	}
	
	if(empty($errors)){
		//все хорошо, регистрируем
		$pass = password_hash($data['password'], PASSWORD_DEFAULT);
		$sql = "INSERT INTO `users` (`id`, `email`, `pass`) VALUES (NULL, '".$data['email']."', '".$pass."')";
		$mysqli->query($sql);

		$student_query = $mysqli->query("SELECT id FROM users WHERE email = \"$email\" ");
		while($student_result = $student_query->fetch_array()){
			$student = $student_result['id'];
		}
		echo $student;
		$student_insert = $mysqli->query("INSERT INTO `student` (`id`, `name`, `surname`, `sex`, `birthday`, `abode`, `nationality`, `mobile_phone`, `id_user`) 
												VALUES (NULL, '".$data['user_name']."', '".$data['surname']."', NULL, NULL, '".$data['abode']."', '".$data['nationality']."', '".$data['mobile_phone']."', '$student');");
	}else{
		$errors_result = array_shift($errors);
	}
}
?>
