<?php

$students=array();

//1
$st=array();
$st['ФИО']="Инванов Иван Иванович";
$st['Дата рождения']=2005;

var_dump($st);
echo "<hr>";

$students[]= $st ;

var_dump($students);
echo "<hr>";

//2
$st=array();
$st['ФИО']="Инванова Иваниха Ивановична";
$st['Дата рождения']=2008;
var_dump($st);


$students[]=$st;
var_dump($students);
echo "<hr>";

//3
$st=array();
$st['ФИО']="Я бох всего мира";
$st['Дата рождения']=0;
var_dump($st);
echo "<hr>";

$students[]=$st;
var_dump($students);
echo "<hr>";

echo $students[2]['ФИО'];
echo "<hr>";
//для каждого из списка массива студентс
foreach($students as $s){
    //var_dump($s);
    //echo "<hr>";
    echo $s['ФИО']." год рождения :".$s['Дата рождения'].'<br>';
}
?>

<style>
    .info{
        width: 200px;
        border: 1px solid;
        padding: 5px;
        margin: 5px;
    }
    .fio{
        font-family: sans-serif;
        font-weight: bolder;
        text-align: center;
    }
</style>

<?php
foreach($students as $s){
    //var_dump($s);
    //echo "<hr>";
?>

<div class="info"
<?php
    if(date('Y')-$s['Дата рождения']<18){
        ?> style="background-color:red;"> <?php
    } else {
        ?> ><?php
    } ?>
    
<div>Пропуск в общежитие</div>
<div class=fio><?php echo $s['ФИО'];?></div>
<div class=birthday><?php echo $s['Дата рождения']; ?></div>
 <div>Студенту <?php  echo date('Y')-$s['Дата рождения'];?> лет</div>
</div>
<?php
 }
  ?>

