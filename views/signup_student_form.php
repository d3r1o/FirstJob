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
        <form method="post">
            <input type="text" name="user_name" placeholder="Имя"> 
            <input id="email_input" type="text" name="email" placeholder="Адрес почты" title="Введите почту">
            <input type="text" name="institution" placeholder="Учебное заведение">
            <input type="text" name="specialty" placeholder="Специальность">
            <select class="year" name="year_end">
                <option selected>
                    Год окончания
                </option>
                <option>2011</option>
                <option>2011</option>
                <option>2012</option>
                <option>2013</option>
                <option>2014</option>
                <option>2015</option>
                <option>2016</option>
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option>
                <option>2026</option>
                <option>2027</option>
            </select>  
            <input id="password_input" type="password" name="password" placeholder="Пароль" title ="Введите пароль">
            <input id="password_input" type="password" name="password_again" placeholder="Повторите пароль" title ="Повторите пароль">
            <input id="join_submit" type="submit" name="signup_student" value="Присоединиться к FirstJob">
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

