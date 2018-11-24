<? 
error_reporting(-1);
require "../database_controll/db.php";
if($_SESSION['logged_user'])
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Добавить статью | Юрбизнесгруп</title>
	<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=no">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="../img/favicon.png">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="../css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">	
	
	<script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>
</head>
<body> 
	
	<div class="navbar">
		<div class="container">
			<div class="navbar-top">
				<div class="nav-logo"><a class="nav-href" href="/">ООО «ЮРБИЗНЕСГРУП»</a></div>
				<div class="city">Ваш город:
					<select class='select_city'>
						<option class = 'select_city__option' value='moscow'>Москва</option>
						<option class = 'select_city__option' value='voronezh'>Воронеж</option>
						<option class = 'select_city__option' value='cheboksary'>Чебоксары</option>
						<option class = 'select_city__option' value='kazan'>Казань</option>
						<option class = 'select_city__option' value='ulyanovsk'>Ульяновск</option>
						<option class = 'select_city__option' value='samara'>Самара</option>
						<option class = 'select_city__option' value='izhevsk'>Ижевск</option>
						<option class = 'select_city__option' value='ufa'>Уфа</option>
						<option class = 'select_city__option' value='naberezhnyeChelny'>Набережные Челны</option>
						<option class = 'select_city__option' value='perm'>Пермь</option>
					</select>
				</div>
				</div>
		        <div class="right-block">
					<div class="nav-number"><a class="nav_href_tel" href="tel: +7(843)518-89-89"><i class="fa fa-phone"></i><span class='tel_number'>+7 (843) 518-89-89</span> </a></div>
		            <div class="search-btn">
		              <a class="search-ico"><i class="fa fa-search"></i></a>
		            </div>
		        </div>
			</div>
			<hr />
			<div class="navbar-botom">
				<ul>
					<li><a href="../about">О нас</a></li>
					<li><a href="../services">Услуги</a></li>
					<li><a href="../article">Статьи</a></li>
					<li><a href="../contact">Контакты</a></li>
					<li><a href="../signup">Регистрация</a> | <a href="../signin">Вход</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<section id="admin_section">
		<div class="col-md-6 admin_articles">
			<h1>Создание новой статьи</h1>
			<br>
			<form action="admin_test.php" method="post">
				<h3>Заголовок статьи<span style="color: red">*</span></h3>
				<input type="text" name="offer" placeholder="Введите заголовок статьи..." style="width: 100%">
				
				<br>
		
				<h3>Мета теги<span style="color: red">*</span></h3>
				<input type="text" name="title" placeholder="Заголовок страницы..." style="width: 100%">
				<input type="text" name="description" placeholder="Описание страницы..." style="width: 100%">
				
				<br>
				
				<h3>Текст страницы<span style="color: red">*</span></h3>
				<textarea rows="5" class="form-control" type="text" id="txt1" name="content" placeholder="Текст статьи"></textarea>
				
				<br>
				
				<h3>Фото статьи</h3>
				<input type="hidden" name="MAX_FILE_SIZE" value="5242880" />
				<!--input name="uploaded_file" type="file" class="btn btn-default"-->
				<div class="file_upload">
        			<button type="button" class="add-btn">Загрузить фото</button>
        			<div>Файл не выбран</div>
        			<input type="file" name="uploaded_file">
    			</div>
    			
    			<br>
    			
    			<div style="display: flex">
    			 <a href="admin_test.php" class="add-btn-inverted">Отменить</a>
    			 <input type="submit" name="getpost" value="Создать статью" class="add-btn">
    			</div>
    		</form>
		</div>
	</section>
	
<section id="footer">
	<div class="container-fluid">
		<div class="col-md-12">
			<ul class="footer-nav hidden-xs">
	            <li><a href="/">Главная</a></li>
	            <li><a href="/about/">О нас</a></li>
	            <li><a href="/services/">Услуги</a></li>
	            <li><a href="/article/">Статьи</a></li>
	            <li><a href="/contact/">Контакты</a></li>
            </ul>
        </div>
        <div class="col-md-12 footer-links">
        	<h4>Подписывайтесь на нас 
        		<hr class="visible-xs" style="border: 0 !important; margin: 5px 0" />
        		<a href="#"><i class="fa fa-facebook" area-hidden="true"></i></a>
        		<a href="#"><i class="fa fa-twitter" area-hidden="true"></i></a>
        		<a href="#"><i class="fa fa-vk" area-hidden="true"></i></a>
        		<a href="#"><i class="fa fa-telegram" area-hidden="true"></i></a>
        	</h4>
        </div>
        <div class="col-md-12">
        	<div class="col-md-4">
        		<h3><a class="nav-link" href="#main">&copy; 2018 ООО «ЮРБИЗНЕСГРУП»</a></h3>
        	</div>
        	<div class="col-md-4">
        		<h3><a href="#">Политика конфиденциальности</a></h3>
        	</div>
        	<div class="col-md-4">
        		<h3>Разработка сайтов <a style="color: #00b4f7" href="http://itkluch.ru">ITKluch.ru</a></h3>
        	</div>
        </div>
    </div>
</section>

<script type="text/javascript">
tinyMCE.init({
// General options
mode : "exact",
elements : "txt1",
theme : "advanced",
language : "ru",
plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
// Theme options
theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,media,help,code,|,insertdate,inserttime,|,forecolor,backcolor",
theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,|,sub,sup,|,charmap,emotions,|,print,|,ltr,rtl,|,fullscreen",
theme_advanced_buttons4 : "",
theme_advanced_toolbar_location : "top",
theme_advanced_toolbar_align : "left",
theme_advanced_statusbar_location : "none",
theme_advanced_resizing : true,
theme_advanced_path : false,
 
// Example content CSS (should be your site CSS)
content_css : "..css/style.css"//"/styles/mystyle.css",
});
</script>
</body>
</html>
<? } ?>
<?php
 if($_SESSION['logged_user']->login != 'admin')
 {
   echo '<div class="color:red">Вы не можете просматривать данную страницу!</div>';
 }
?>