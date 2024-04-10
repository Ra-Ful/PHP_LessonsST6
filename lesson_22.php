<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
</head>
<body>

<?php 
//Ошибки по причине другого названия базы данных и таблицы
$action ="";
if (isset($_GET['action'])) {
    $action=$_GET['action'];
};
var_dump($_GET);
echo '<hr>';
if($action=="create_new"){
    //Создаем новую запись в базе данных
    $text ="";
    if (isset($_GET['new_do'])){
        $text=$_GET['new_do'];
    }
    echo 'Доб. new запись: '.$text;
}
$sql="INSERT INTO `todo` (`id`,`text``complete`) VALUES (NULL,?,'0');";

//

if ($action=="done"){
    foreach($_GET as $key => $value){
        $sub_key = substr($key,0,8);
        if($sub_key=="id_done_"){
            $id=substr($key,8);
            echo "<hr> Выполнено... id=".$id."<br>";
            //update
            $sql = "UPDATE `todo` SET complete=1 WHERE id=?";
            $conn = new mysqli("localhost","root","","to do", 3306);
            $conn->set_charset("utf8");
            if($conn->connect_error){
                die("Ошибка: ".$conn->connect_error);
            }
            $stmt = $conn -> prepare($sql);
            $stmt -> bind_param("s",$id);
            $stmt -> execute();
        }
    }
}


if ($action =="delete"){
    foreach($_GET as $key => $value){
        $sub_key = substr($key, 0,8);
        if ($sub_key=="id_done_"){
            $id = substr($key, 8);
            echo "<hr> Удаление..id=".$id."<br>";
            $sql = "DELETE FROM `todo` WHERE id=?";
            $conn= new mysqli("localhost", "root","","to do", 3306);
            $conn->set_charset("utf8");
            if($conn->connect_error){
                die("Ошибка:".$conn->$connect_error);
            }
            $stmt = $conn -> prepare($sql);
            $stmt-> bind_param("s",$id);
            $stmt->execute();
        }
    }
}

?>

    <form>
    <input type="text" name="new_do"> <button type="submit" name="action" value="create_new">Создать новый</button><br />
    <ul>
    <?php
    $sql = "SELECT * FROM `todo` ORDER BY complete";
    $conn = new mysqli("localhost","root","","to do",3306);
    $conn->set_charset("utf8");
    if ($conn->connect_error){
        die("Ошибка: ". $conn->connect_error);
    }
        $stmt =$conn->prepare($sql);
        //$stmt->bind_param("i",$offset);
        $stmt->execute();
        $result = $stmt->get_result();
            if ($result) {
                foreach ($result as $row) {
                    if($row['complete'==1]){
                        //Выполнено
                        echo "<li>";
                        echo '<input type="checkbox" name="id_done_'.$row['id'].'" value="1">';
                        echo '<s>'.htmlentities($row['text'], ENT_QUOTES, 'UTF-8').'</s>';
                        echo "</li>";
                        
                    }
                    else {
                        //не выполнено
                        echo "<li>";
                        echo '<input type="checkbox" name="id_done_'.$row['id'].'"value="1">';
                        echo htmlentities($row['text'], ENT_QUOTES, 'UTF-8');
                        echo "</li>";
                    }
                }
            }
        
        ?>
   
    <button type="submit" name="action" value="done">Выполнены</button>
    <button type="submit" name="action" value="delete">Удалить</button>
</form>

</body>
</html>
