<?php
include ("lesson_11_tovar.php");
//var_dump($group);


$razdel = '';
if(isset($_GET['razdel'])){
    $razdel=$_GET['razdel'];
}

if($razdel==''|| $razdel=='main'){
    include("lesson_11_main.php");
}
if($razdel=='group'){// Группы товара
    include("lesson_11_group.php");
}





?>










