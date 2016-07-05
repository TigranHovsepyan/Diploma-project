<!DOCTYPE html>
<head>
<title>Главная | Main page</title>
<meta charset="utf-8">
<?
include 'include/functions.php';
?>
<link rel="stylesheet" href="glisse.css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

<!--[if lt IE 7]>
     <link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="screen">
     <script type="text/javascript" src="js/ie_png.js"></script>
     <script type="text/javascript">
        ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');
     </script>
<![endif]-->
<!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
  <![endif]-->
</head>
<body id="page1">
<div class="wrap">
   <!-- header -->
   <header>
      <div class="container">
         <a href="index.html"><img src = "images/gerb.png" width = "220" alt = "Герб"/><span>Donetsk National<br/> Technical University</span></a>
         <nav>
            <ul>
               <li class="current"><a href="index.php" class="m1">Главная</a></li>
               <li><a href="gallery.php" class="m2">Фотогалерея</a></li>
               <li><a href="students.php" class="m3">Наши студенты</a></li>
               <li><a href="contacts.php" class="m4">Контакты</a></li>
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
   <div class="content"><p class = "txt1 big"> Добро пожаловать на студенческий портал кафедры КСМ. Здесь Вы можете узнать главные новости из жизни студентов данной кафедры и их работы, которые теперь являются достоянием и гордостью университета.</p></div>
      <!-- aside -->
      <aside>
         <h3>Categories</h3>
         <ul class="categories">
            <li class = "current"><span><a href="index.php">Main</a></span></li>
            <li><span><a href="gallery.php">Photogallery</a></span></li>
            <li><span><a href="students.php">Our Students</a></span></li>
            <li><span><a href="contacts.php">Contacts</a></span></li>
            <li><span><a href="http://csm.donntu.org">The website of the Department</a></span></li>
         </ul>
	</div>
      </aside>
      
      <!-- content -->
      <!--<section id="content">
       <div id="banner">
            <h2>Professional <span>Online Education <span>Since 1992</span></span></h2>
         </div>
         <div class="inside">
            <h2>Recent <span>Articles</span></h2>
            <ul class="list">
               <li><span><img src="images/icon1.png"></span>
                  <h4>About Template</h4>
                  <p>Free 1028X768 Optimized Website Template from TemplateMonster.com! We hope that you like this tem- plate and will use for your websites.</p>
               </li>
               <li><span><img src="images/icon2.png"></span>
                  <h4>Branch Office</h4>
                  <p>Sed ut perspiciatis unomnis iste natus error sit volup tatem accusantiu loremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
               </li>
               <li class="last"><span><img src="images/icon3.png"></span>
                  <h4>Student’s Time</h4>
                  <p>Eque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempo- ra incidunt ut labore.</p>
               </li>
            </ul
            <h2>Move Forward <span>With Your Education</span></h2>
            <p><span class="txt1">Student’s Site</span> is a free web template created by TemplateMonster.com team. This website template is optimized for 1024X768 screen resolution. </p>
            <div class="img-box"><img src="images/1page-img.jpg">This website template can be delivered in two packages - with PSD source files included and without them. If you need PSD source files, please go to the template download page at TemplateMonster to leave the e-mail address that you want the template ZIP package to be delivered to.</div>
            <p class="p0">This website template has several pages: <a href="index.html">Home</a>, <a href="about-us.html">About us</a>, <a href="articles.html">Articles</a> (with Article page), <a href="contact-us.html">Contact us</a> (note that contact us form – doesn’t work), <a href="sitemap.html">Site Map</a>.</p>
         </div>
      </section>-->
   </div>
   </div>
</div>
<!-- footer -->
<footer>
   <div class="container">
      <div class="inside">
         <div class="wrapper">
            <div class="fleft"> По всем вопросам: <span>8.800.146.56.7</span></div>
      </div>
   </div>
</footer>
</body>
</html>