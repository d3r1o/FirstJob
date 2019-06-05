<?session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
<!--  <meta http-equiv="Refresh" content="30"> перезагрузка страницы  -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="/css/slider.css">
  <link rel="stylesheet" href="/css/header.css">
  <link rel="stylesheet" href="/css/detail.css">
  <!-- шрифт   -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
  <!-- шрифт   -->

  <title></title>
</head>
<body>
<div class="header" id="head-menu">
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
		<div class="log-in">
			<span><a href="login">Авторизация</a></span>
			<span><a href="signup">Регистрация</a></span>
		</div>
    </div>
	
	<div class="top-menu">
		<div class="menu">
			<ul>
				<li><a href="/">Первая работа</a></li>
				<li><a href="internships">Стажировки</a></li>
				<li><a href="company">Компании</a></li>
			</ul>
		</div>
	</div>
	
</div>

<div id="slider" class="slider">
    <ol class="slider__indicators">
      <li class="slider__indicator slider__indicator_active" data-slide-to="0"></li>
      <li class="slider__indicator" data-slide-to="1"></li>
      <li class="slider__indicator" data-slide-to="2"></li>
      <li class="slider__indicator" data-slide-to="3"></li>
    </ol>
    <div class="slider__items">
      <div class="slider__item slider__item_1 slider__item_active " >
        <div class="slider__item_inner">
          <span class="slider__item_title">
            First Job - это
          </span>
          <span class="slider__items_description">
            Первая работа - первый опыт
          </span>
        </div>
      </div>
      <div class="slider__item slider__item_2">
        <div class="slider__item_inner">
          <span class="slider__item_title">
            First Job - это
          </span>
          <span class="slider__items_description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nihil quo molestiae perspiciatis qui vero?
          </span>
        </div>
      </div>
      <div class="slider__item slider__item_3">
        <div class="slider__item_inner">
          <span class="slider__item_title">
            First Job - это
          </span>
          <span class="slider__items_description">
            Стажировки для студентов
          </span>
        </div>
      </div>
      <div class="slider__item slider__item_4">
        <div class="slider__item_inner">
          <span class="slider__item_title">
            First Job - это
          </span>
          <span class="slider__items_description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nihil quo molestiae perspiciatis qui vero?
          </span>
        </div>
      </div>
    </div>
    <a class="slider__control slider__control_prev" href="#" role="button"></a>
    <a class="slider__control slider__control_next" href="#" role="button"></a>
</div>
<div class = "container">