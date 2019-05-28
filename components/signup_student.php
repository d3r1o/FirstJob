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
		//$mysqli->query($sql);
		$student = $mysqli->query("SELECT id FROM users WHERE email = '".$data['email']."' ");
        $student_result = $student->fetch_array();

	}else{
		$errors_result = array_shift($errors);
	}
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?echo $student_result['id'];?>
</body>
</html>
