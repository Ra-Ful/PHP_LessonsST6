<?php
//Булевы переменные (bull) это фалсе и тру
$a=true;
echo $a;
//В PHP нельзя рисоеденять разные виды данных к друг другу + нельзя
// использовать
// echo $s+$i - error
// echo $s+(string)$i - error
$s='privet';
$i=2;
echo $s.$i;//через точки низя

echo "Вставка в строку {$s}";//двойные позволяют в себя чот вставлять
echo"<br>";
//Вардамп
echo"<hr>";

var_dump($s); // Дает содержимое строки и посмотреть расшифровку
echo "<h3>МАССИВЫ</h3>";
$person[]="Elena";
var_dump($person);
echo"<br>";
$person[]="Ola";
var_dump($person);
echo"<br>";
var_dump($person[0]);
echo "<br>";
foreach($person AS $name=>$value){
    echo "Индекс:{$name} Значение:{$value}<br>";
}
if ("1"==1){//Примерно равно
    echo"1=1";
}
if(1===1){//cтопроц равно, типы данных сравниваются
    echo"1===1";
}
$i=0;
echo $i;//0
echo "<br>";
$i=$i+1;
$i++;
echo ++$i;
// for(Инициализация;Условия;Действие)
for($counter=0;$counter<10;$counter++){
    echo '$counter='.$counter;
    echo '<br>';
}

while($i<10){
    echo '$i='.$i;
    echo '<br>';
    $i++;
}

$i=0;
do{
    echo '$i='.$i;
    echo '<br>';
    $i++;

} while ($i<10);

