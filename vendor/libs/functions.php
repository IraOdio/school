<?php
function debug($arr){
    echo '<pre>'.print_r($arr,true).'</pre>';
}
function writeInFile($data){
    file_put_contents("logs/log.txt",'{'.$data.'}'."\n",FILE_APPEND);
}
function logOnHTML($data,$options = 0){
    $data = print_r($data);
$selector_class = ($options == 1) ? 'c-red' : ($options==2 ? 'c-ye' : ($options==3 ? 'c-or': ''));
$open_div = "<div class='note $selector_class'>";
$close_div = "</div>";
file_put_contents("logs/log.html",$open_div . $data . $close_div,FILE_APPEND);
}
require_once 'nf_pp.php';