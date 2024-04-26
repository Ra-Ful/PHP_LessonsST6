<?php

for($counter=0;$counter<10;$counter++):
    echo '$counter='.$counter;
    echo '<br>';
endfor;
// особенности синтаксиса для массивов через двоеточие и энд?
echo "<h3>Условия ИФ-ЭЛСЭ</h3>";
if(1===1){//Точно равно
    echo"1===1";
}
if("1"==1){
    echo "'1'==1";
}
$a=1;
if($a==5){
    echo "a rovno 5";
    echo "...";
}elseif ($a==6){
    echo "a rovno 6";
    echo "!!!";
} else {
    echo "idi ti";
}//Если тут через двоеточие то берется первое слово типа endif
echo "<br>";
$color=2;
switch($color){
    case 1: echo "Zeleni";
    case 2: echo "Jeltii";
    case 3: echo "Krasni";
    break;

}
echo "<br>";
$color=2;
switch($color){
    case 1: echo "Zeleni"; break;
    case 2: echo "Jeltii"; break;
    case 3: echo "Krasni"; break;
    default:"hz"; break;
}
echo "<br>";
for( $c=0; $c<10; $c++){
    if($c==2){continue;}
    echo '$c='.$c;
    echo '<br>';
    if($c==5){ break; }

}
echo "<br>";
echo "<hr>";
echo "<h3>Мини-игры</h3>";
$c=0;
while(true){
    $r=rand(1,1000);
    echo '$r='.$r;
    echo "<br>";
    $c++;
    if($r==5){break;}

}

echo '$c='.$c;
echo "<br>";

echo "<hr>";
echo "<h3>МАССИВЫ</h3>";
$num[]=1;
$num[]=5;
$num[]=10;
var_dump($num);
echo"<br>";
echo $num[1];//5
echo "<br>";
echo count($num);//выводит кол-во элементов в массиве
echo "<br>";


$color=array();
$color['red']="red";
$color['blue']="blue";

extract($color,EXTR_PREFIX_ALL,"var");//вар создает переменные с началом $var_
//т.е. например с red  это будет $var_red, он элементы забирает из массива и  делает из них
//переменные
echo "<br>";
echo $var_Text;
//contact; нужен для обратного действия (перекидывания переменных в массив)
$multi[][][][]="1";
var_dump($multi);
