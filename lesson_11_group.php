<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Группы товара</title>
</head>
<body>
    <?php 
    if (isset($_GET['name'])){
        $group_name = $_GET['name'];
    }
    
    ?>
    <h2>Группа товара <?php  echo $group_name; ?></h2>
    <a href="?razdel=main">Вернуться на главную</a><br>
    <?php 
    //покажем список товара из этой группы!
    foreach($group [$group_name] as $tovar){
        ?> 
        <div class="tovar">
            <div class="tovar_name"><?php echo $tovar['name'];?></div>
            <div class="tovar_cost"><?php echo $tovar['cost'];?></div>
            <a href="?razdel=item&name=<?php echo urldecode($group_name);?>
&name_tovar=<?php echo urldecode($tovar['name']); ?>
&cost=<?php echo urldecode($tovar['cost']); ?>" >Купить</a>

        </div>
<?php
    }
    ?>
</body>
</html>