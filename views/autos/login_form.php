<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <title>Авторизация | FirstJob</title>
</head>
<body>
<div class="content">
    <div class="logo">
        <a href="/">
            <img src="../img/logo.png" alt="FirstJob Лого">
        </a>
    </div>
    <div class="social_connect">
        <p>Авторизация</p>
    </div>
    <div class="main_form">
        <form method="post" class="box">
            <input id="email_input" type="text" name="email" placeholder="Адрес почты" title="Введите почту">
            <input id="password_input" type="password" name="password" placeholder="Пароль" title ="Введите пароль">
              <input id="join_submit" type="submit" name="join" value="Авторизоваться">
            <?include "./components/login.php";?>
            <div <?if(!empty($errors)):?> class="errors"<?endif?>><?=$errors_result?></div>
        </form>
    </div>
    <div class="log_in">
        <hr>
        <p>
            Отсуствует аккаунт? <a href="signup">Зарегестрироваться</a>
        </p>
    </div>
</div>
</body>
</html>