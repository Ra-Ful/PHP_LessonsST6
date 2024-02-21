<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о товаре</title>
</head>
<body>
    <?php
    //name&name_tovar=&cost=
    $group_name="";
    if(isset($_GET['name'])){
        $group_name = $_GET['name'];

    }
    $tovar_name="";
    if(isset($_GET['name_tovar'])){
        $tovar_name = $_GET['name_tovar'];

    }
    $cost="";
    if(isset($_GET['cost'])){
        $cost = $_GET['cost'];
    }
     ?>
     <form method="get" action="?razdel=order">
     Товар : <?php echo $tovar_name?> <br>
     Количество <input type="number" name="count" value="1"><br>
     <input type="hidden" name="razdel" value="order">
     <input type="hidden" name="tovar" value="<?php echo urlencode($tovar_name);?>">
     <input type="hidden" name="cost" value="<?php echo urlencode($cost);?>">

     <input type="submit">



     </form>

</body>
</html>