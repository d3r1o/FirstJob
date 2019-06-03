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
        <p>Регистрация компании</p>
    </div>
    <div class="main_form">
        <form method="post" class="box" action="">
            <input type="text" name="email" placeholder="Адрес почты" title="Введите почту">

            <input type="text" name="name_org" placeholder="Название организации">
            <input type="text" name="society" placeholder="Тип организации">
            <input type="text" name="city" placeholder="Город">
            <input type="text" name="name" placeholder="Имя представителя">
            <input type="text" name="surname" placeholder="Фамилия представителя">
            <input type="text" name="post" placeholder="Должность">
            <input type="text" name="mobile_phone" placeholder="Телефон">

            <input type="password" name="password" placeholder="Пароль" title ="Введите пароль">
            <input type="password" name="password_again" placeholder="Повторите пароль" title ="Повторите пароль">

            <input type="submit" name="signup_company" value="Присоединиться к FirstJob">
            <?include "components/signup_company.php";?>
            <div <?if(!empty($errors)):?> class="errors"<?endif?>><?=$errors_result?></div>
        </form>
    </div>
    <div class="log_in">
        <hr>
        <p>
            Уже есть аккаунт? <a href="login">Авторизоваться</a>
        </p>
    </div>
</div>
</body>
</html>
