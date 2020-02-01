<?php


namespace app\controllers;

use app\models\Admin;
use app\models\Player;

class AdminController extends AppController
{
    public $layout = 'admin';
    public function indexAction(){
        session_start();
        if($_SESSION['admin']!="admin"){
            header("Location:/Auth");
            exit;
        }
        if($_GET['do'] == 'logout'){
            unset($_SESSION['admin']);
            session_destroy();
            header("Location:/");
        }

    }

    public function playersAction(){
        $nePlayers = new Admin();
        $result = $nePlayers->getNotActivePlayers();
        $this->set(compact('result'));
        if(isset($_POST['submit_newplayer'])){
            $nePlayers->complexF($_POST['newplayer_id']);
            header('Location:players');
        }
    }
    public function seasonsAction(){
        $model = new Admin();
        $result = $model->findFull();
        $curr =[];
        $currentDate = getDate();
        $currentDate = $currentDate['year']."-".$currentDate['mon']."-".$currentDate['mday'];
        $currentDate = strtotime($currentDate);
        foreach($result as $key => $item){
            $startDate = $item['date_start'];
            $startDate = strtotime($startDate);
            $endDate = $item['date_end'];
            $endDate = strtotime($endDate);
            if($currentDate>$startDate&&$currentDate<$endDate){
                $curr[] = $item;
            }
        }
        $this->set(compact('curr'));
        if (isset($_POST['submit_player'])) {
            try {
                $updatePlayer =  new Player();
                $fields_v = [
                    "stage1" => $_POST['stage1'],
                    "stage2" => $_POST['stage2'],
                    "stage3" => $_POST['stage3'],
                    "stage4" => $_POST['stage4'],
                    "stage5" => $_POST['stage5'],
                    "stage6" => $_POST['stage6'],
                    "stage7" => $_POST['stage7'],
                    "stage8" => $_POST['stage8'],
                    "stage9" => $_POST['stage9'],
                ];
                if($updatePlayer->fullUpdate($fields_v,$_POST['player'])){
                    header("Refresh:0");
                }

            } catch (\Exception $e) {
                print($e);
            }
        }

    }
    public function infoAction(){

    }
}