<?php
$a=1;
for($a=0;$a<50;){
    echo $a;
    $a=$a+5;
}
$w=0;
for($a=30;$a<=50;){
    $w=$w+$a;
    $a++;

}
echo "<br>";
echo $w;

$w=0;
for($a=5;$a<50;$a=$a+5){
    $w=$w+$a; 
}
echo "<br>";
echo $w;
$m=array();
$m[]=100;
$m[]=200;
var_dump($m);
echo "<hr>";

$i=10;
for($ma=array();$i<=19;$i++){
    $ma[]=$i;
}
var_dump($ma);
// $ma=range(10,19); тоже работает
$r=rand(1,10);
$M=array();
$M[]=$r;
$i=1;
for($M=array(); $i<=3;$i++){
    $r=rand(1,10);
    $M[]=$r;
}
echo "<hr>";
var_dump($M);
echo "<hr>";
$summ=$M[0]+$M[1]+$M[2];
echo $summ;


$su=0;
for($i=0;$i<=1000;$i++){
     $kub=rand(1,6);
    if ($kub==3){
        $su=$su+1;
    }
}
echo "<hr>";
echo $su;