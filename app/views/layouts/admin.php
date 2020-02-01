<?php

use vendor\core\Database;

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/admin.css">
    <title>Школа облачных технологии</title>
</head>
<body>
<?php if($_SESSION['admin']=="admin"): ?>
<div class="adminbar-wrapper">
    <div class="adminbar">
        <div class="adminbar_menu">
            <a href="/" class="adminbar_item">Публичная часть</a>
        </div>
    </div>
</div>
<?php endif; ?>
<div class="l-aside aside">
    <ul class="aside-menu">
        <li class="aside-menu-item"><a href="/admin" class="aside-menu_item__link">Главная</a></li>
        <li class="aside-menu-item"><a href="/admin/players" class="aside-menu_item__link">Участники</a></li>
        <li class="aside-menu-item"><a href="/admin/seasons" class="aside-menu_item__link">Сезоны</a></li>
        <li class="aside-menu-item"><a href="/admin?do=logout" class="aside-menu_item__link">Выйти</a></li>
    </ul>
</div>
<div class="wrapper">
    <header class="l-header header">
        <div class="l-logo o-logo logo">
            <img class="l-imgLogo imgLogo" width="121px" height="154px" src="/images/logo.png" alt="">
            <div class="l-headTitle o-headTitle headTitle headTitle-hover">
                Школа <br>
                Облачных <br>
                Технологии
            </div>
        </div>
    </header>
    <div id="content" class="l-content content"><?= $content ?></div>
    <footer class="l-footer footer">
        <div class="footerTitle">
            ШОТ © <?= date("Y") ?>
        </div>
    </footer>
</div>
<?php // debug(Database::$countSql); ?>
<?php// debug(Database::$queries); ?>
</body>
</html>
