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
        <p>Регистрация студента</p>
    </div>
    <div class="main_form">
        <form method="post" class="box">

            <input type="text" name="user_name" placeholder="Имя">

            <input type="text" name="surname" placeholder="Фамилия">

            
  
            <input type="text" name="email" placeholder="Адрес почты" title="Введите почту">
                    
            <input type="password" name="password" placeholder="Пароль" title ="Введите пароль">

            <input type="password" name="password_again" placeholder="Повторите пароль" title ="Повторите пароль">

            <input type="submit" name="signup_student" value="Присоединиться к FirstJob">
            <?require(ROOT. '/components/signup.php');?>
            <div <?if(!empty($errors)):?> class="errors"<?endif?>><?=$errors_result?></div>
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

