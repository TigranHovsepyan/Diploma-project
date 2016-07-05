<?php
include 'include/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Студенты | Students</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link href="http://allfont.ru/allfont.css?fonts=calligraph" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="fonts/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<!--[if lt IE 7]>
     <link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="screen">
     <script type="text/javascript" src="js/ie_png.js"></script>
     <script type="text/javascript">
        ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img, .articles li img');
     </script>
<![endif]-->
<!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
  <![endif]-->
</head>
<body id="page3">


<div class="wrap">
   <header>     
      <div class="container">
        <a href="index.html"><img src = "images/gerb.png" width = "220" alt = "Герб"/><span> Donetsk National<br/> Technical University</span></a>
         <nav>
	    	 <ul>
               <li><a href="index.php" class="m1">Главная</a></li>
               <li><a href="gallery.php" class="m2">Фотогалерея</a></li>
               <li class = "current"><a href="students.php" class="m3">Наши студенты</a></li>
               <li><a href="contacts.php" class="m4">Контакты</a></li>
               <li class = "last"><a href="http://csm.donntu.org" class = "m5">Сайт кафедры</a></span></li>
             </ul>
         </nav>
         <form action="" id="search-form">
            <fieldset>
            <div class="rowElem">
               <input type="text">
               <a href="#" onClick="document.getElementById('search-form').submit()">Поиск</a></div>
            </fieldset>
         </form>
      </div>
   </header>
   <div class="container">
      <!-- aside -->
      <aside>
         <h3>Categories</h3>
         <ul class="categories">
            <li><span><a href="index.php">Main</a></span></li>
            <li><span><a href="gallery.php">Photogallery</a></span></li>
            <li class = "current"><span><a href="students.php">Our Students</a></span></li>
            <li><span><a href="contacts.php">Contacts</a></span></li>
            <li><span><a href="http://csm.donntu.org">The website of the Department</a></span></li>
         </ul>
		 <?php		
			$data = Array();
			prepare_data(DEV_PATH, $data, true);
			prepare_data(SITES_PATH, $data, false);
		    ksort($data);
		 
		    if (empty($_GET['group']))
		    {
				printf('<div class = "studentsname" align = "center"><p class = "maintext" align = "center"> Список групп: </p>');
				
				foreach ($data as $k => $v)
					printf('<a href = "?group=%s" class = "students" align = "center">  %s </a> </br>', $k, $k);
 				printf('</div>');
				
			
			}
			
			else
			{
				
				printf('<div class = "studentsname" align = "center"><p class = "maintext" align = "center">  Работы студентов группы <i>%s</i> </p>', $_GET['group']);
				
				foreach ($data[$_GET['group']] as $v)
				{
					printf('<a href = "%s" class = "students" align = "center">  %s </a>', $v['link'], $v['name']);
					
					if ($v['dev']=='true')
						printf('<a class = "star" href = "#" onclick="document.getElementById(\'aaa\').src=\'check.php?path=%s&\' + Math.random(); document.getElementById(\'aaa\').style.display=\'block\'; document.getElementById(\'close\').style.display=\'block\'"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>
</a>', $v['link']);
					
					printf('<br />');
 				}
				printf('</div>');
			}
		 ?>
		 <div class = "add"><iframe id="aaa"></iframe></div>
		 <a href = "#" onclick="document.getElementById('close').style.display='none'; document.getElementById('aaa').style.display='none' "><img src = "images/closewindow.png" class = "close" id = "close" width="50" height="50"/></a>
</div>
</aside>
<!-- footer -->
<footer>
   <div class="container">
      <div class="inside">
         <div class="wrapper">
            <div class="fleft">По всем вопросам: <span>8.800.146.56.7</span></div>
         </div>
      </div>
   </div>
</footer>
</body>
</html>
