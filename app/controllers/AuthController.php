<?php


namespace app\controllers;


class AuthController extends AppController
{

    public function indexAction(){
        session_start();
        $user = "admin";
        $pass = "e00cf25ad42683b3df678c61f42c6bda";
        if($_POST['submitAuth']){
            if($user == $_POST['user'] AND $pass == md5($_POST['pass'])){
                $_SESSION['admin'] = $user;
                header("Location: /Admin");

                exit;
            }
            else {
                $text = '<p class="error_message">Логин или пароль неверны!</p>';
                $this->set(compact('text'));
            }
        }
    }
}