<?php 
require "db.php";

$data = $_POST;

if(isset($data['join'])){
	$errors = array();

	$email = $data['email'];
	$em_check = $mysqli->query("SELECT COUNT(`email`) as count FROM `users` WHERE `email` = \"$email\"");
	while($em_result = $em_check->fetch_array()){
		$em = $em_result['count'];
	}
	if($em != 0){
		$pass_check = $mysqli->query("SELECT pass FROM `users` WHERE `email` = \"$email\"");
		while($pass_result = $pass_check->fetch_array()){
			$pass = $pass_result['pass'];
		}
		if(password_verify($data['password'], $pass)){
			//Логиним
			$user_check = $mysqli->query("SELECT * FROM `users` WHERE `email` = \"$email\" AND `pass` = \"$pass\"");
			while($user_result = $user_check->fetch_array()){
				$user = $user_result;
			}
			$_SESSION['login'] = $user;

            //запрос на имя пользователя, проверка является ли пользователь представителем компании или студентом
			$check_query = $mysqli->query("SELECT b.name FROM users a, student b WHERE a.id = b.id_user AND a.id = ".$user['id']." ");
			while($check_result = $check_query->fetch_assoc()){
			    $check = $check_result;
			}

			if(empty($check)){
			    $check_query = $mysqli->query("SELECT b.name FROM users a, company b WHERE a.id = b.id_user AND a.id = ".$user['id']." ");
			    while($check_result = $check_query->fetch_assoc()){
			        $check = $check_result;
			    }
			}

		}else{
			$errors[] = 'Не верный пароль';
		}
	}else{
		$errors[] = 'Пользователь не найден';
	}

	if(!empty($errors)){
		$errors_result = array_shift($errors);
	}
}