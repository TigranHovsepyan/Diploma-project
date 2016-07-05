<?php
	session_start();
?>
	  <!DOCTYPE html>
<html>
<head>
   <meta charset=utf-8">
  <meta name="Keywords" content="HTML, META, "> 
    <title>Главная</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container"> <h4>Система учета комунальных ресурсов школ г.Донецка</h4>
</div>
</nav>
<body><center><br><br><br><br><br><br><br>
<div class="block1"> <div >
	<div class="block1_1"><h5>Авторизация </h5></div><br>

</div><br>

</body>
<script type="text/javascript" src="js/bootstrap.min.js">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</html>
<?
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=md5($_POST['password']); if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    echo ("Вы ввели не всю информацию, заполните все поля!");
	echo "<script>document.location.href='form.php';</script>";
    }
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
$password = stripslashes($password);
    $password = htmlspecialchars($password);
//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
// подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 
$result = mysql_query("SELECT * FROM users WHERE login='$login'",$db); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
    echo ("Извините, введённый вами login или пароль неверный.");
	echo "<script>document.location.href='form.php';</script>";
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
	$_SESSION['number']=$myrow['number'];
	echo ("Добро пожаловать, ");
	echo $_SESSION['login'];
	echo "<script>document.location.href='index.php';</script>";
    }
 else {
    //если пароли не сошлись

    echo ("Извините, введённый вами login или пароль неверный.");
	echo "<script>document.location.href='form.php';</script>";
    }
    }
    ?>
</div><br>

</body>
</html>