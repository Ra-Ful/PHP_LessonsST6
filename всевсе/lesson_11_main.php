<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин техники и перекусика</title>
</head>
<body>
    <h3>Группы товара</h3>
    <ul>
    <?php 
    //Выводим список групп
    foreach($group as $row_group_name => $row_group_tovar){
        echo "<li><a href='?razdel=group&name=".urldecode($row_group_name)."'>". $row_group_name."</a></li>";
    }
    
    ?>
    </ul>
</body>
</html>