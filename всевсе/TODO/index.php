<ul><?php
 include ("todo_class.php");
 $todo=new Todo();
 ob_start();
require "view/list.php";
$CONTENT = ob_get_clean();
$main = file_get_contents("view/template/main.tpl");
$main =str_replace('{HEADER}',"Заголовок",$main);
$main =str_replace('{TITLE}',"Заголовок страницы", $main);
$main =str_replace('{SOME_CONTENT}',$CONTENT, $main);

echo $main;