<?php
	session_start();
	require_once dirname(__FILE__).'/bd.php';
?>
<html>
<head>
   <meta charset=utf-8">
  <meta name="Keywords" content="HTML, META, "> 
    <title>Главная</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body><center><br><br><br><br><br><br><br>
<div class="block_reg"> <div >
	<div class="block1_1"><h5>Регистрация пользователя </h5></div><br>
		<form action="save_user.php" class="input-group input-group-lg" method="post"><br>
		<div class="input-group ">
		<span class="input-group-addon" id="sizing-addon2"><i class="fa fa-sign-in" aria-hidden="true"></i></span>
			<input name="login" type="text" class="form-control" placeholder="Логин" aria-describedby="sizing-addon2">
			</div><br>
			<div class="input-group ">
			<span class="input-group-addon" id="sizing-addon2"><i class="fa fa-key" aria-hidden="true"></i></span>
				<input name="password" type="password" class="form-control" placeholder="Пароль" aria-describedby="sizing-addon2">
			</div><br>
			<br>
			<input name="submit" type="submit" class="btn btn-success" value="Зарегистрироваться">
		 </form>
		 
</div><br>
<?
echo $myname;
?>
    </body>
	<script type="text/javascript" src="js/bootstrap.min.js">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </html>
