<?php
//константы 
define("LOGIN","admin");
define("PASSWORD","123");

// Запускаем сессию
session_start();

// admin = 1 делаем админку
$admin=false;

//проверка на существование админки 
 if(isset($_SESSION['admin'])){
    if($_SESSION['admin']==1){
        //это значит уже авторизован
        $admin=true;
    } 
 } 

 if(isset($_GET['logout']) && $_GET['logout']==1)
 {//выход из учетки
    $admin=false;
    $_SESSION['admin']= false;
 }

 //var_dump($_POST);
 if(isset($_POST['login']) && $_POST['login']==LOGIN 
 && isset($_POST['password']) && $_POST['password']==PASSWORD)
 {
    $admin = true;
     $_SESSION['admin']=true;
     setcookie("last_login",$_POST['login'], time()+60*60*24*14);
 }

 if(!$admin){//если не админ то регистрация будет
    $last_login="";
    if(isset($_COOKIE['last_login'])){
        $last_login=$_COOKIE['last_login'];
    }
?>
<form action="" method="post">
    Логин <input name="login" value="<?php echo $last_login;?>"><br>
    Пароль<input type="password" name="password"><br>
    <input type="submit">
</form>
<?php
} else {
    ?>Вы авторизованы!! <a href="?logout=1">Ливнуть</a>
    <?php
}