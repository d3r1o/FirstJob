<?session_start();?>
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
			<img src="../img/logo_main.png" alt="FirstJob Лого">
		</a>
    </div>
    <div class="social_connect">
        <p>Регистрация студента</p>
    </div>
    <?include "components/signup_student.php";?>
    <?if(empty($user)):?>
    <div class="main_form">
        <form method="post" class="box" action="">
            <input type="text" name="email" placeholder="Адрес почты" title="Введите почту">

            <input type="text" name="surname" placeholder="Фамилия">
            <input type="text" name="user_name" placeholder="Имя">
            <input type="text" name="abode" placeholder="Город проживания">
            <input type="text" name="nationality" placeholder="Гражданство">
            <input type="text" name="mobile_phone" placeholder="Телефон">
                    
            <input type="password" name="password" placeholder="Пароль" title ="Введите пароль">

            <input type="password" name="password_again" placeholder="Повторите пароль" title ="Повторите пароль">

            <input type="submit" name="signup_student" value="Присоединиться к FirstJob">

            <div <?if(!empty($errors)):?> class="errors"<?endif?>><?=$errors_result?></div>
        </form>
    </div>
    <div class="log_in">
        <hr>
        <p>
            Уже есть аккаунт? <a href="login">Авторизоваться</a>
        </p>
    </div>
    <?else:?>
        <div class="checkin">
            <div class="check_name">
                Вы успешно зарегестрировались, <?=$check['name']?>!
            </div>
            <a href="/">
                <div class="check_entry">Перейти на сайт</div>
            </a>
        </div>
    <?endif?>
</div>
</body>
</html>


