<?php
echo "<h3>Адресная строка и GET</h3>";
var_dump($_GET);
/*
?>
<hr>
<form action="" method="GET">
    Число А:<input type="number" min="1" name="A"> <br>
    Имя: <input   name="name"> <br>
    <input type="submit" value="Отправить">
</form>
<?php
if (isset($_GET["A"])){
    echo "КОЛ-ВО УЧАСТНИКОВ:".$_GET["A"]."<br>";
    $e=rand(1,$_GET["A"]);
    echo "Победитель под номером: ". $e;

}
*/
?> 

<form action="" method="GET">
    Число А:<input type="number" name="A"> <br>
    Число В: <input type="number"name="B"> <br>
    <input type="submit" value="Посчитать">
</form>

<?php

if (isset($_GET["A"]) && isset($_GET["B"]))
{
    $sum = (int)$_GET["A"] + (int)$_GET["B"];
    echo $sum;

}
echo "<h3>Невидимые данные POST</h3>";
var_dump($_POST);
?>
<form action="" method="POST">
    Логин <input name="login">
    <input type="submit" value="Отправить">

</form>
<?php
/*
session_start();
$_SESSION['login'] = $_POST['login'];
var_dump($_SESSION);
if (isset($_SESSION["login"])==NULL){
    $_SESSION['login'] = $_POST['login'];
}
*/
if(isset($_POST['login'])){
    $_SESSION['login']= $_POST['login'];
} 
if (isset($_SESSION['login'])){
    echo ' Запомнили логин='.$_SESSION['login'];

}

