<? session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/inner.css">
    <link rel="stylesheet" href="/css/detail.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>FirstJob</title>
</head>
<body>
<? include "components/user.php"; ?>
<div class="back_color">
    <div class="top_nav">
        <div class="logo">
            <? if ($_SERVER[REQUEST_URI] == "/"): ?>
                <img src="/img/logo.png">
            <? else: ?>
                <a href="/">
                    <img src="/img/logo.png">
                </a>
            <? endif; ?>
        </div>
        <div class="menu">
            <ul>
                <li><a href="/">Первая работа</a></li>
                <li><a href="internships">Стажировки</a></li>
                <li><a href="company">Компании</a></li>
            </ul>
        </div>
        <div class="menu">
            <ul>
                <li><img src="/img/profile20.png"><a
                        <? if ($user['type'] == "Студент"): ?>href="profile_student?id=<?= $user['id'] ?>"
                        <? else: ?>href="profile_crew?id=<?= $user['id'] ?>"<? endif ?>> Мой профиль</a></li>
                <li><img src="/img/logout20.png"><a href="logout"> Выход</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="profile">
    <div class="user">
        <div class="users">
            <div class="user_name"><?= $user['name']; ?>,&nbsp;</div>
            <div class="user_city">
                <? if (!empty($user['abode'])): ?>
                    <?= $user['abode']; ?>
                <? else: ?>
                    <?= $user['city']; ?>
                <? endif ?>
            </div>
        </div>
    </div>
</div>


<div class="container">


