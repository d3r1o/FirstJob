<?session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">

<!--  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->

  <link rel="stylesheet" href="/css/inner.css">
    <!-- шрифт   -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <!-- шрифт   -->

  <title></title>
</head>
<body>
<?include "components/user.php";?>
<div class="back_color">
    <div class="top_nav">
        <div class="logo">
            <?if ($_SERVER[REQUEST_URI]=="/"):?>
                <img src="/img/logo.png">
            <?else:?>
                <a href="/">
                    <img src="/img/logo.png">
                </a>
            <?endif;?>
        </div>
        <div class="menu">
            <ul>
                <li><a href="/">Первая работа</a></li>
                <li><a href="internships">Стажировки</a></li>
                <li><a href="company">Компании</a></li>
            </ul>
        </div>

        <nav role="navigation" class="navigation">
            <ul>

                <li><a href="#"><img style="width: 40px; height: 40px;" src="/img/icon.png" ></a>
                    <ul class="dropdown">
                        <li><a href="#">Мой профиль</a></li>
                        <li><a href="logout">Выход</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>

<div class="profile">
    <div class="user">
        <div class="users">
            <div class="user_name"><?=$user['name'];?>,&nbsp;</div>
            <div class="user_city">
                <?if(!empty($user['abode'])):?>
                    <?=$user['abode'];?>
                <?else:?>
                    <?=$user['city'];?>
                <?endif?>
            </div>
        </div>
        <div class="user_menu">
            <ul>
                <li><a href="">Мой профиль</a></li>
                <li><a href="logout">Отклики</a></li>
            </ul>
        </div>
    </div>
</div>



<div class = "container">


