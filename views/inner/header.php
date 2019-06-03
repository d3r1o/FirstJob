<?session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="/css/style_inner.css">
    <!-- шрифт   -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <!-- шрифт   -->

  <title></title>
</head>
<body>
<div class="header">
    <div class="logo">
        <div class="logo-item">
            <?if ($_SERVER[REQUEST_URI]=="/"):?>
                <img src="/img/logo.png">
            <?else:?>
                <a href="/">
                    <img src="/img/logo.png">
                </a>
            <?endif;?>
        </div>
        <div class="top-menu">
            <div class="menu">
                <ul>
                    <li><a href="/">Первая работа</a></li>
                    <li><a href="/">Стажировки</a></li>
                    <li><a href="/">Компании</a></li>
                </ul>
            </div>
        </div>
        <div class="profile">
            <div class="menu">
                <ul>
                    <li><a href="#">Мой Профиль</a></li>
                    <li><a href="#">Выход</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
<div class = "container">