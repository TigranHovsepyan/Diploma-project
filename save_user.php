<?php
session_start();
include ("bd.php");
?>
<html>
<head>
   <meta charset=utf-8">
  <meta name="Keywords" content="HTML, META, "> 
    <title>Главная</title>
    <link rel="stylesheet" href="style.css">
    <link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body><center><br><br><br><br><br><br><br>
<nav class="navbar navbar-default navbar-fixed-top">
</nav>
<div class="block1"> <div >
	<div class="block1_1"><h5>Регистрация пользователя </h5></div><br>
		<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=(md5($_POST['password'])); if ($password =='') { unset($password);} }
 if (empty($login) or empty($password))
    {
    echo ("Вы ввели не всю информацию, заполните все поля!");
	echo "<script>document.location.href='form.php';</script>";
	exit;
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
	$password = stripslashes($password);
    $password = htmlspecialchars($password);
 //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
 // подключаемся к базе
   
 // проверка на существование пользователя с таким же логином
    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    echo ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
	echo "<script>document.location.href='reg.php';</script>";
	exit;
    }
 // если такого нет, то сохраняем данные
    $result2 = mysql_query ("INSERT INTO users (login,password) VALUES('$login','$password')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт.";
	echo "<script>document.location.href='index.php';</script>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>
</div><br>

    </body>
    </html>