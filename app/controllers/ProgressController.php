<?php


namespace app\controllers;


use app\models\Progress;

class ProgressController extends AppController
{
    public function indexAction(){
        $model = new Progress();
        $result = $model->findFull();
        $pred =[];
        $curr =[];
        $next =[];
        $currentDate = getDate();
        $currentDate = $currentDate['year']."-".$currentDate['mon']."-".$currentDate['mday'];
        $currentDate = strtotime($currentDate);
        foreach($result as $key => $item){
            $startDate = $item['date_start'];
            $startDate = strtotime($startDate);
            $endDate = $item['date_end'];
            $endDate = strtotime($endDate);
            if($currentDate>$endDate){
                $pred[] = $item;
            }
            if($currentDate>$startDate&&$currentDate<$endDate){
                $curr[] = $item;
            }
            if($currentDate<$startDate){
                $next[] = $item;
            }
        }
       // pp($result,true);
        $this->set(compact('pred','curr','next'));
    }
}