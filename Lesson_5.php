<?php
$b=0;
for($a=0; $a<=20;){
    $b+=$a;
    $a=$a+1;
    
}
echo $b;
echo "<hr>";
$s="привет мир";
 echo  strlen($s);//кол-во в строке
 echo "<hr>";
 echo  mb_strlen($s);//utf-8

for($i=0;$i<strlen($s);$i++){
    echo $s[$i];
}
$br="<br>";
echo $br;
$d="privet mir";
//переворачивает строку
echo strrev($d);
//заменить мир на слово асбексть
$dA=str_replace("mir","asbest",$d);
echo $br;
echo $dA;
$x=rand(-10,10);
echo $br;
echo "<hr>";
echo $x;
echo $br;
if ($x>0){
    echo " Число $x положительное";
} else {
    echo "Число $x Отрицательное";
}
echo $br;
if ($x%2==0){
    echo " Число $x четное";
} else {
    echo "Число $x не четное";
}
echo $br;
echo "<hr>";
$x=-100;
for(;$x!=0;$x++){
    echo $x;
    echo ' ';
}
echo "<hr>";
$xx=1000;
for($i=1000;$i<=1100;$i++){
    if($i%7==0){
        echo $i,' ';

    }
}
//Мой вариант в понятии до 1млн степени 
/*
for($a=1;$a<=1000000;$a++){ 
    echo pov(2,$a),' ';

}*/
for($i=1;$i<=1000000;$i*=2){
    echo $i.",";
}