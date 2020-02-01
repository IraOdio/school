<?php


namespace vendor\core\base;

/*
 * Описание вида
 */

class View
{
    /*
     * Текущий маршрут
     * @var array
     */
    public $route = [];
    /*
     * Текущий вид
     * @var string
     */
    public $view;
    /*
     * Текущий шаблон
     * @var string
     */
    public $layout;

    public function __construct($route, $layout = '', $view = '')
    {
        $this->route = $route;
        if ($layout === false) {
            $this->layout = false;
        } else {
            $this->layout = $layout ?: LAYOUT;
        }
        $this->view = $view;
    }

    /*
     * функция рендера страницы, принимает в себя $переменные доступные для юзания в view
     */
    public function render($vars)
    {
        if (is_array($vars)) {
            extract($vars); // ключи массива в переменные
        }
        $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php"; // 
        ob_start(); // начало буферизации
        if (is_file($file_view)) {
            require $file_view; // файл который попадает в буфер
        } else {
            echo "Не найден вид {$file_view}";
        }
        $content = ob_get_clean(); // очищает буфер и записывает в content
        if (false !== $this->layout) {
            $file_layout = APP . "/views/layouts/{$this->layout}.php";
            if (is_file($file_layout)) {
                require $file_layout;
            } else {
                echo "Не найден шаблон {$file_layout}";
            }
        }
    }
}