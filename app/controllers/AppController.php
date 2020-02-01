<?php


namespace app\controllers;


use vendor\core\base\Controller;
/*
 * контроллер наследованный от главного контроллера из ядра, все последующие контроллеры наследуются от этого,
 * по-сути это главный контроллер на уровне приложения
 *
 */
class AppController extends Controller //
{

    public function __construct($route)
    {
        parent::__construct($route);
        session_start();
    }
    public function isAdmin(){
        if($_SESSION['admin']=="admin"){
            return true;
        }
        return false;
    }
    public function includeArea($url){
        if(file_exists($url)){
            include $url;
            return true;
        }
        return false;
    }

}