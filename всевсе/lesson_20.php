<?php
$data_base = new mysqli("localhost", "root","", "world",3306);
if($data_base->connect_error){
    die("Ошибка: ". $data_base->connect_error);

}
$sql="SELECT*FROM city WHERE population>1000000 ORDER BY population DESC LIMIT 5";
$result =$data_base->query($sql);
var_dump($result);
if($result){
    foreach($result as $row){
        echo '<hr>';
        echo $row ['row'];
    }
}
/*

$stmt=$data_base->prepare($sql);
$LIMIT=5;
$stmt->bind_param("i",$LIMIT);
$stmt->execute();
$result = $stmt->get_result();

var_dump($result);
if ($result){
    foreach($result as $row){
        echo '<hr>';
        echo $row['name'];
    }
}

var_dump($result);

*/









$data_base->close();