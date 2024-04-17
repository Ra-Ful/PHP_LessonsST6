<?php
 include ("todo_class.php");
 $todo=new Todo();
 $todo->show();

 $list = $todo->select();
 if($list){
    foreach ($list as $row){
        ?> 
        <li><?=$row["id"];?>. <?=htmlentities($row["Text"], ENT_QUOTES,'UTF-8');?></li>
        <?php


    }
 }






?>
