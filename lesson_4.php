<?php
//
$b=0;
/*
for($a=0; $a<=50;){
    $b+=$a;
    $a= $a+1;
    
}
echo $b;*/
for($a=0; $a<=20;){
    $b+=$a*$a;
    $a=$a+1;
    
}
echo $b;
echo "<hr>";
for($a=0; $a<=500;$a++){
    if($a%7==0){
        echo $a;
        echo "<br>";
    }
}
echo "<hr>";
$a=rand(1,20);
$b=rand(1,20);
if($a<$b){
    echo '$a='.$a;
}else{
    echo '$b='.$b;
}
// Вариант 2
echo $a>$b ? $a : $b;
echo "<br>";
echo "<hr>";
//Вариант 3 
echo max($a,$b);
echo '<br>';
echo "<hr>";
$x=2;
$y=3;
for($y=1; $y<=9; $y++)
{
    echo "$x*$y = ".$x*$y."<br>";
}
echo '<br>';
echo "<hr>";
Echo"<table border=1>";
for($y=1; $y<=9; $y++)
{ echo "<tr>";
    for($x=1;$x<=9;$x++)
    { echo "<td width=20px height=20px>";
        echo $x*$y;
        echo "</td>";
    }
    echo "<tr>";
}
Echo"</table>";