<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>
<body>
    <?php
    $basket=array();
    if(isset($_SESSION['basket'])){
        $basket = $_SESSION['basket'];
    } 
    $count=0;
    if(isset($_GET['count'])){
        $count = $_GET['count'];
    } 

    if ($count>0){
        $tovar="";
        if(isset($_GET['tovar'])){
            $tovar=$_GET['tovar'];
        }
        $cost="";
        if(isset($_GET['cost'])){
            $cost=$_GET['cost'];
        }
        //Добавить элемент в массив в баскет в виде масива
        $basket[]=["tovar"=>$tovar, "cost"=>$cost, "count"=>$count];
        //Сохрпаним корзину в сессию
        $_SESSION['basket'] =$basket;
    }
        foreach($basket as $tovar){
            ?> 
            <div>
                <div class = "towar_name"><?php  echo urldecode($tovar['tovar']);?></div>
                <div class="towar_cost"><?php echo $tovar['cost']; ?></div>
                <div class="towar_count"><?php echo $tovar['count']; ?></div>
            </div>
            <hr>
<?php
        }
 ?>
</body>
</html>