<?php
//error_reporting(-1); // включает ошибки
//define("DEBUG",false);
use vendor\core\Router;
$query = rtrim($_SERVER['QUERY_STRING'],'/');
define('WWW',__DIR__); // C:\OSPanel\domains\framework.work\public
define('CORE',dirname(__DIR__).'/vendor/core'); // C:\OSPanel\domains\framework.work/vendor/core
define('ROOT',dirname(__DIR__)); // C:\OSPanel\domains\framework.work
define('APP',dirname(__DIR__).'/app'); // C:\OSPanel\domains\framework.work/app
define('LAYOUT','default');
require '../vendor/libs/functions.php';
spl_autoload_register(function($class){
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php'; // автозагрузчик, подключает все - как работает хрен знает
    if (is_file($file)) {
        require_once $file;
    }
});
/*
 * Вот здесь нужно учить регулярные выражения
 */
Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$',['controller'=>'Page']); //#1
/*
 * ^page - строка должна начинаться с page и ни как иначе, за начало строки отвечает этот ебучий символ слева от слова page ^^^^^^^^^
 *
 */
Router::add('^page/(?P<alias>[a-z-]+)$',['controller'=>'Page','action'=>'view']); //#2
/*
 *
 */
//defaults routs
Router::add('^$',['controller'=>'Main','action'=>'index']); //#3
/*
 *
 */
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$'); //#4
/*
 *
 */

Router::dispatch($query);

