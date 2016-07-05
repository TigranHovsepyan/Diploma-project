<!DOCTYPE html>
<head> 
	<title>Регистрация/авторизация</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div align = "center">
<p class = "students"> Для просмотра содержимого авторизуйтесь на сайте </p>

<form class="input-group input-group-lg" action="testreg.php" method="post" align = "center"><br>
  <div class="input-group ">
  <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-sign-in" aria-hidden="true"></i></span>
   <input name="login" type="text" class="form-control" placeholder="Логин" aria-describedby="sizing-addon2">
   </div><br>
   <div class="input-group ">
   <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-key" aria-hidden="true"></i></span>
    <input name="password" type="password" class="form-control" placeholder="Пароль" aria-describedby="sizing-addon2">
   </div><br><br>
  <div class = "enter"> <a href="reg.php" class="btn btn-danger">Регистрация</a></div>
   <input name="submit" type="submit" class="btn btn-success" value="Войти">
   </form>
</div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>