<?php
session_start();
include ("lesson_11_tovar.php");


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
if($razdel=='item'){
    include("lesson_11_item.php");
}
if ($razdel=='order'){
    include("lesson_11_order.php");
}




?>










