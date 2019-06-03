<?php 
require "db.php";

$data = $_POST;

if(isset($data['signup_company'])){
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

		$company_query = $mysqli->query("SELECT id FROM users WHERE email = \"$email\" ");
		while($company_result = $company_query->fetch_array()){
			$company = $company_result['id'];
		}
		$student_insert = "INSERT INTO `company` (`id`, `name_org`, `society`, `employees_sum`, `activity`, `city`, `name`, `surname`, `post`, `mobile_phone`, `id_user`) 
		VALUES (NULL, '".$data['name_org']."', '".$data['society']."', NULL, NULL, '".$data['city']."', '".$data['name']."', '".$data['surname']."', '".$data['post']."', '".$data['mobile_phone']."', '$company')";
		$mysqli->query($student_insert);

		$user_check = $mysqli->query("SELECT * FROM `users` WHERE `email` = \"$email\" ");
		while($user_result = $user_check->fetch_array()){
			$user = $user_result;
		}
		$_SESSION['login'] = $user;

		$check_query = $mysqli->query("SELECT b.name FROM users a, company b WHERE a.id = b.id_user AND a.id = \"$company\"  ");
		while($check_result = $check_query->fetch_array()){
			$check = $check_result;
		}

	}else{
		$errors_result = array_shift($errors);
	}
}
?>
