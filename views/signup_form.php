<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Регистрация | FirstJob</title>
</head>
<body>
<div class="content">
    <div class="logo">
		<a href="/">
			<img src="../img/logo.png" alt="FirstJob Лого">
		</a>
    </div>
    <div class="social_connect">
        <p>Регистрация</p>
    </div>
    <div class="main_form">
		<?include "./components/signup.php";?>
        <form method="post">		
            <input id="email_input" type="text" name="email" placeholder="Адрес почты" title="Введите почту">
            <input id="password_input" type="password" name="password" placeholder="Пароль" title ="Введите пароль">
			<input id="password_input" type="password" name="password_again" placeholder="Повторите пароль" title ="Повторите пароль">
            <input id="join_submit" type="submit" name="signup" value="Присоединиться к FirstJob">
			<div class="errors"><?=$errors_result?></div>
        </form>
    </div>
    <div class="log_in">
        <hr>
        <p>
            Уже есть аккаунт? <a href="#">Авторизоваться</a>
        </p>
    </div>
</div>
</body>
</html>
