<?php


namespace app\controllers;


use app\models\FillApply;
use app\models\Player;

class FillapplyController extends AppController
{
    public function indexAction()
    {

    }

    public function processingAction()
    {
        if (isset($_GET['FA-Submit'])) {
            try {
                $model = new FillApply();
                $fields_v = [
                    "name" => "'{$_GET['FA-Name']}'",
                    "family" => "'{$_GET["FA-Family"]}'",
                    "age" => $_GET["FA-Age"],
                    "skills" => "'{$_GET["FA-Skill"]}'",
                    "self" => "'{$_GET["FA-Self"]}'",
                    "email" => "'{$_GET["FA-Email"]}'"
                ];
               $model->insert($fields_v);
               //print($model->lastId());
                $player = new Player();
                $fields2 = [
                    "id_user" => $model->lastId()
                ];
                $player->insert($fields2);


            } catch (\Exception $e) {
                print($e);
            }

            //pp($_GET);
        }
    }
}