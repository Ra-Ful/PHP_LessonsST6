<?php

//10/3 = 
echo "<h3>Форматирование чисел</h3>";
echo(10/3)."rub";
echo "<hr>";
echo "<br>";
printf("Строка формата:%f <br>",10/3);//3.333333
printf("Строка формата:%1.2f <br>",10/3);//3.33
printf("Строка формата: %010.2f <br>", 10/3);//0000003.33
$m=0.01;
//вес: 0.010кг
printf("Вес: %0.3f  кг <br>", $m);//Вес : 0.010кг

$m=1.2;
printf("Вес: %0.0f кг <br>", $m); //кагэ

echo "<h3>Функции и области видимости</h3>";
function calc($a,$b){
    return $a+$b;
}
echo calc(1,2);
echo "<hr>";

/*$sum=0;
function test($a){
    global $sum;
    $sum=$sum+$a;
    return $sum;
}
echo test(10)."<br>";
echo test(4)."<br>";
echo test(3)."<br>";*/



function test($a){
    static $sum=0; //Статическая переменная с памятью
    $sum=$sum+$a;
    return $sum;
}
echo test(10)."<br>";//10
echo test(4)."<br>";//14
echo test(3)."<br>";//17

//Функция isset() - проверяет на существование данных 
session_start();
var_dump($_SESSION); // Информация о сессии 
echo "<hr>";
if(isset($_SESSION['hits'])){
    $_SESSION['hits']=$_SESSION['hits']+1;

} else {
    $_SESSION['hits']=1;
}
echo " Я знаю что ты посмотрел эту страницу ".$_SESSION['hits']." раз";
echo "<h3>Печеньки куки</h3>";
var_dump($_COOKIE);
setcookie("test","123");
setcookie("name","student");

echo "<h3>Адресная строка и GET</h3>";
var_dump($_GET);
echo "<hr>";
?><a href="?a=1">Параметр а=1</a><br><?php
?><a href="?a=2">Параметр а=2</a><br><?php
?><a href="?a=3">Параметр а=3</a><br><?php
?><a href="?a=4">Параметр а=4</a><br><?php
echo "<hr>";
if(isset($_GET["a"])){
    echo "Получено а=".$_GET["a"];

}

