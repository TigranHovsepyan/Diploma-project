<?php 
  include 'include/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Галерея | Gallery</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link href="http://allfont.ru/allfont.css?fonts=calligraph" rel="stylesheet" type="text/css" />

</head>
<body id="page2">
<div class="wrap">
   <!-- header -->
   <header>
      
      <div class="container">
           <a href="index.php"><img src = "images/gerb.png" width = "220" alt = "Герб"/><span> Donetsk National<br/> Technical University</span></a>
         <nav>
            <ul>
               <li><a href="index.php" class="m1">Главная</a></li>
               <li class="current"><a href="gallery.php" class="m2">Фотогалерея</a></li>
               <li><a href="students.php" class="m3">Наши студенты</a></li>
               <li><a href="contacts.php" class="m4"> Контакты </a></li>
               <li class="last"><a href="http://csm.donntu.org" class="m5">Сайт кафедры</a></li>
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
      <aside>
         <h3>Categories</h3>
         <ul class="categories">
            <li><span><a href="index.php">Main</a></span></li>
            <li class = "current"><span><a href="gallery.php">Photogallery</a></span></li>
            <li><span><a href="students.php">Our Students</a></span></li>
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
        
        printf('<div class = "studentsname" align = "left"><p class = "maintext" align = "center">  Галерея студентов группы <i>%s</i> </p>', $_GET['group']);
        printf('<div class = "imagescontainer">');
        foreach ($data[$_GET['group']] as $v)
        {
          echo "<img src=" . $v['linkphoto'] . " class = 'images' width = '200' height = '150'>";
          
        /*  if ($v['dev']=='true')
            printf('<a class = "star" href = "#" onclick="document.getElementById(\'aaa\').src=\'check.php?path=%s&\' + Math.random(); document.getElementById(\'aaa\').style.display=\'block\'; document.getElementById(\'close\').style.display=\'block\'">*</a>', $v['link']);*/
          
         // printf('<br />');
        }
          printf('</div>');
        printf('</div>');
      }
     ?>
   </div>
   </aside>
</div>
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
