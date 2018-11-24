<?
require "../database_controll/db.php";
if($_SESSION['logged_user'])
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Администратор | Юрбизнесгруп</title>
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
	
	<section id="signedin_user" style="min-height: 68.2%">
      <div class="signedin_user_content" style="margin-left: 26%">
        <h1>Здравствуйте, admin!</h1>
            <h3>Вам доступны следующие действия</h3>
        <ul>
            <li>
                <div class="signedin_user__img">
                    <svg enable-background="new 0 0 442 442" version="1.1" viewBox="0 0 442 442" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#17438b" d="m171 336h-101c-5.5 0-10 4.5-10 10s4.5 10 10 10h101c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/>
                        <path fill="#17438b" d="m322 336h-101c-5.5 0-10 4.5-10 10s4.5 10 10 10h101c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/>
                        <path fill="#17438b" d="m322 86h-252c-5.5 0-10 4.5-10 10s4.5 10 10 10h252c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/>
                        <path fill="#17438b" d="m322 136h-101c-5.5 0-10 4.5-10 10s4.5 10 10 10h101c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/>
                        <path fill="#17438b" d="m322 186h-101c-5.5 0-10 4.5-10 10s4.5 10 10 10h101c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/>
                        <path fill="#17438b" d="m322 236h-101c-5.5 0-10 4.5-10 10s4.5 10 10 10h101c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/>
                        <path fill="#17438b" d="m322 286h-101c-5.5 0-10 4.5-10 10s4.5 10 10 10h101c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/>
                        <path fill="#17438b" d="m171 286h-101c-5.5 0-10 4.5-10 10s4.5 10 10 10h101c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/>
                        <path fill="#17438b" d="m171 136h-101c-5.5 0-10 4.5-10 10v101c0 5.5 4.5 10 10 10h101c5.5 0 10-4.5 10-10v-101c0-5.5-4.5-10-10-10zm-10 101h-81v-81h81v81z"/>
                        <path fill="#17438b" d="m422 76h-30v-30c0-11-9-20-20-20h-352c-11 0-20 9-20 20v320c0 27.6 22.4 50 50 50h342c27.6 0 50-22.4 50-50v-270c0-11-9-20-20-20zm0 290c0 16.5-13.5 30-30 30h-342c-16.5 0-30-13.5-30-30v-320h352v305c0 13.8 11.2 25 25 25 5.5 0 10-4.5 10-10s-4.5-10-10-10c-2.8 0-5-2.2-5-5v-255h30v270z"/>
                    </svg>
                </div>
                <span><a href="admin_test.php" style="text-decoration: none">Управление статьями</a></span>
            </li>
        </ul>
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
</body>
</html>
<?}?>
<?if($_SESSION['logged_user']->login != 'admin')
 {
   echo '<div class="color:red">Вы не можете просматривать данную страницу!</div>';
 }
 ?>