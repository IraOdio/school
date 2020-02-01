<?php
$file = $_POST['editPath'];
$text = $_POST['editText'];
if(is_file($file)){
file_put_contents ($file,$text);
}