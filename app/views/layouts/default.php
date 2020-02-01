<?php

use app\controllers\AdminController;
use app\controllers\AuthController;
use vendor\core\Database;
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Школа облачных технологии</title>
</head>
<body>
<?php if($_SESSION['admin']=="admin"): ?>
    <div class="adminbar-wrapper">
        <div class="adminbar">
            <div class="adminbar_menu">
                <a href="/admin" class="adminbar_item">Администраторская часть</a>
            </div>
        </div>
    </div>
<?php endif; ?>
<header class="l-header offset">
    <div class="l-logo o-logo logo">
        <img class="l-imgLogo imgLogo" width="121px" height="154px" src="/images/logo.png" alt="">
        <div class="l-headTitle o-headTitle headTitle headTitle-hover">
            Школа <br>
            Облачных <br>
            Технологии
        </div>
    </div>
    <div class="l-menuTop o-menuTop menuTop">
        <ul class="menuTopList">
            <li class="menuTopList-item"><a class="menuTopList-itemLink menuTopList-itemLink-hover" href="/">Главная</a></li>
            <li class="menuTopList-item"><a class="menuTopList-itemLink menuTopList-itemLink-hover" href="/info">Информация</a></li>
            <li class="menuTopList-item"><a class="menuTopList-itemLink menuTopList-itemLink-hover" href="/progress">Прогресс</a></li>
            <li class="menuTopList-item"><a class="menuTopList-itemLink menuTopList-itemLink-hover" href="/fillapply">Заполнить заявку</a></li>
        </ul>
    </div>
    <div class="l-clouds o-clouds clouds">
        <img src="/images/cloud.png" alt="" class="l-imgCloud o-imgCloud imgCloud">
    </div>
</header>
<div id="content" class="l-content offset">
    <div class="jsAjaxAfter"></div>
    <?= $content ?>
</div>
<footer class="l-footer offset">
    <div class="l-footerTitle o-footerTitle footerTitle">
        ШОТ © <?= date("Y") ?>
    </div>
</footer>
<?php // debug(Database::$countSql); ?>
<?php //debug(Database::$queries); ?>
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/script.js"></script>
<?php if($_SESSION['admin']=="admin"): ?>
    <script src="/js/admin.js"></script>
<?php endif; ?>
</body>
</html>
