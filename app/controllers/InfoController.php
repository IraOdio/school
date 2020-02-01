<?php


namespace app\controllers;


class InfoController extends AppController
{
    public function indexAction(){
        $pathIncludesArea= [
            "stage1" => ROOT."/include/stage1.php",
            "stage2" => ROOT."/include/stage2.php",
            "stage3" => ROOT."/include/stage3.php",
            "stage4" => ROOT."/include/stage4.php",
            "stage5" => ROOT."/include/stage5.php",
            "stage6" => ROOT."/include/stage6.php",
            "stage7" => ROOT."/include/stage7.php",
            "stage8" => ROOT."/include/stage8.php",
            "stage9" => ROOT."/include/stage9.php",
            "isAdmin" => false
        ];
        $thisController = $this;
        $adminClass = $this->isAdmin() ? "admin-include" : "include";
        $includeComponent = $this->isAdmin() ? "component-include" : "include";
        $includeButton = $this->isAdmin() ? "button-include" : "include-hide";
        $includeInput = $this->isAdmin() ? "input-include" : "include";
        $pathIncludesArea['isAdmin'] = $this->isAdmin();
        $this->set(compact('thisController','adminClass','includeComponent','includeButton','includeInput','pathIncludesArea'));
    }

}