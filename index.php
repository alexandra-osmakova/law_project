<<<<<<< HEAD
<!DOCTYPE html>
<html>

<head>
	<title>Главная | Юрбизнесгруп</title>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,700&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<?php
	require('header.php');
	?>
	<section id="main">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide slide-1">
					<div class="overlay">
						<div class="container">
							<div class="main_content">
								<h1>Полное юридическое <br /> обслуживание Вашего бизнеса</h1>
								<ul>
									<li>- подготовка документов</li>
									<li>- устные консультации</li>
									<li>- работа 24/7</li>
								</ul>
								<a href="/legal_service/index.php" class="more-btn">Узнать подробнее</a>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide slide-2">
					<div class="overlay">
						<div class="container">
							<div class="main_content">
								<h1>Абонентское бухгалтерское <br /> обслуживание Вашего бизнеса</h1>
								<ul>
									<li>- подготовка и расчёт налогов</li>
									<li>- сдача отчётности в налоговую</li>
									<li>- кадровое обслуживание</li>
								</ul>
								<a href="/accounting_services/index.php" class="more-btn">Узнать подробнее</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-pagination main-pagination"></div>
			<div class="swiper-button-prev main-prev"><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'>
					<path d='M0,22L22,0l2.1,2.1L4.2,22l19.9,19.9L22,44L0,22L0,22L0,22z' fill='#fff' /></svg></div>
			<div class="swiper-button-next main-next"><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'>
					<path d='M27,22L27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22z' fill='#fff' /></svg></div>
		</div>
	</section>

	<section name="culture" id="culture">
		<div class="container">
=======
<?php
require "index_content_controller.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Главная | Юрбизнесгруп</title>
	<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=no">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	<script src="https://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script>
	<script type="text/javascript">
	    // Создает обработчик события window.onLoad
	    YMaps.jQuery(function () {
	        // Создает экземпляр карты и привязывает его к созданному контейнеру
	        var map = new YMaps.Map(YMaps.jQuery("#YMapsID")[0]);

	        // Устанавливает начальные параметры отображения карты: центр карты и коэффициент масштабирования
	        map.setCenter(new YMaps.GeoPoint(49.040005, 55.800287 ), 5);

function myLayout(context, map, owner) {
    var element = YMaps.jQuery('<div style="width: 40px; height: 40px; background-image: url(img/point.png);background-size: contain;background-position: center center;background-repeat: no-repeat;"></div>');
    this.onAddToParent = function (parentNode) {
        element.appendTo(parentNode);
    };
    this.onRemoveFromParent = function () {
        element.remove();
    };
    this.update = function () {};
    this.getOffset = function () { return new YMaps.Point(-20, -40); };
    this.getRootNodes = function() { return element; };
	
};
var myStyle = new YMaps.Style();
myStyle.iconStyle = new YMaps.IconStyle(new YMaps.LayoutTemplate(myLayout));
var myPlacemark = new YMaps.Placemark(map.getCenter(), {style: myStyle});
myPlacemark.name = ":p";
map.addOverlay(myPlacemark);
	    })
	</script>
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
					<div class="right-block__content_wrap">
						<div class="nav-number"><a class="nav_href_tel" href="tel: +7(843)518-89-89"><i class="fa fa-phone"></i><span class='tel_number'>+7 (843) 518-89-89</span> </a></div>
		            	<div class="search-btn">
		              		<a class="search-ico"><i class="fa fa-search"></i></a>
		            	</div>
						</div>
		    		</div>
				</div>
			<hr />
			<div class="navbar-botom container">
				<ul>
					<li><a href="about">О нас</a></li>
					<li><a href="services">Услуги</a></li>
					<li><a href="article">Статьи</a></li>
					<li><a href="contact">Контакты</a></li>
					<li class="signup_nav_section"><a href="signup">Регистрация</a> | <a href="signin">Вход</a></li>
				</ul>
			</div>
		</div>
	</div>

    <section id="main">
    	<div class="swiper-container">
	    	<div class="swiper-wrapper">
	    		<div class="swiper-slide slide-1">
					<div class="overlay">
						<div class="container">
							<div class="main_content">
							<h1>Полное юридическое <br /> обслуживание Вашего бизнеса</h1>
			    			<ul>
			    				<li>- подготовка документов</li>
			    				<li>- устные консультации</li>
			    				<li>- работа 24/7</li>
			    			</ul>
			    			<a href="#" class="more-btn">Узнать подробнее</a>
							</div>
			    		</div>
			    	</div>
				</div>
	    		<div class="swiper-slide slide-2">
					<div class="overlay">
		    			<div class="container">
							<div class="main_content">
							<h1>Абонентское бухгалтерское <br /> обслуживание Вашего бизнеса</h1>
			    			<ul>
			    				<li>- подготовка и расчёт налогов</li>
			    				<li>- сдача отчётности в налоговую</li>
			    				<li>- кадровое обслуживание</li>
			    			</ul>
			    			<a href="#" class="more-btn">Узнать подробнее</a>
							</div>
			    		</div>
			    	</div>
	    		</div>
	    	</div>
	    	<div class="swiper-pagination main-pagination"></div>
	    	<div class="swiper-button-prev main-prev"><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'><path d='M0,22L22,0l2.1,2.1L4.2,22l19.9,19.9L22,44L0,22L0,22L0,22z' fill='#fff'/></svg></div>
	    	<div class="swiper-button-next main-next"><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'><path d='M27,22L27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22z' fill='#fff'/></svg></div>
    	</div>
    </section>

    <section name="culture" id="culture">
    	<div class="container">
>>>>>>> 66a3888cb199d963b2b61042334df81b5ce097a9
			<div class="row">
				<div class="col-md-12">
					<h1>Мы будем полезны</h1>
				</div>
				<div class="col-md-12" style="padding-top: 50px">
					<div class="advantage">
<<<<<<< HEAD
						<div class="advantage_img advantage_img_first"></div>
=======
							<div class="advantage_img advantage_img_first"></div>
>>>>>>> 66a3888cb199d963b2b61042334df81b5ce097a9
						<h5>собственникам бизнеса и физическим лицам, попавшим в непростую правовую ситуацию</h5>
					</div>
					<div class="advantage">
						<div class="advantage_img advantage_img_second"></div>
<<<<<<< HEAD
						<h5>руководителям, желающим оптимизировать свои расходы и получить полный комплекс бухгалтерских и/или
							юридических услуг</h5>
=======
						<h5>руководителям, желающим оптимизировать свои расходы и получить полный комплекс бухгалтерских и/или юридических услуг</h5>
>>>>>>> 66a3888cb199d963b2b61042334df81b5ce097a9
					</div>
					<div class="advantage">
						<div class="advantage_img advantage_img_third"></div>
						<h5>организациям и предпринимателям, при взаимодействии с контролирующими организациями</h5>
					</div>
					<div class="advantage">
						<div class="advantage_img advantage_img_fourth"></div>
						<h5>для тех, кто принял решение создать собственный бизнес (регистрация юридических лиц)</h5>
					</div>
					<div class="advantage">
						<div class="advantage_img advantage_img_fifth"></div>
						<h5>юридическим и физическим лицам, чьи права и законные интересы были нарушены</h5>
					</div>
				</div>
<<<<<<< HEAD
			</div>
		</div>
	</section>

	<section id="services">
		<h1>Наши услуги</h1>
		<div class="container">
			<div class="col-md-6">
				<div class="swiper-slide slide-1">
					<div class="overlay"></div>
					<div class="description">
						<h4>Юридическое обслуживание</h4>
					</div>
					<a href="/legal_service/index.php" class="more-btn">Подробнее</a>
				</div>
				<div class="swiper-slide slide-2">
					<div class="overlay"></div>
					<div class="description">
						<h4>Регистрация юридических <br /> лиц, ИП, филлиалов <br /> и представительств</h4>
					</div>
					<a href="/business_registration/index.php" class="more-btn">Подробнее</a>
				</div>
				<div class="swiper-slide slide-3">
					<div class="overlay"></div>
					<div class="description">
						<h4>Банкротство физических <br /> и юридических лиц</h4>
					</div>
					<a href="/bankruptcy/index.php" class="more-btn">Подробнее</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="swiper-slide slide-4">
					<div class="overlay"></div>
					<div class="description">
						<h4>Комплексное сопровождение <br /> бизнеса</h4>
					</div>
					<a href="/business_support/index.php" class="more-btn">Подробнее</a>
				</div>
				<div class="swiper-slide slide-5">
					<div class="overlay"></div>
					<div class="description">
						<h4>Сделки с недвижимостью</h4>
					</div>
					<a href="/real_estate/index.php" class="more-btn">Подробнее</a>
				</div>
				<div class="swiper-slide slide-6">
					<div class="overlay"></div>
					<div class="description">
						<h4>Бухгалтерское обслуживание</h4>
					</div>
					<a href="/accounting_services/index.php" class="more-btn">Подробнее</a>
				</div>
			</div>
		</div>
	</section>
	<section id="zay">
		<div class="overlay">
			<div class="container">
				<h2>Получите индивидуальную консультацию</h2>
				<h4>Выберите интересующую услугу, оставьте заявку, <br /> и мы свяжемся с Вами в ближайшее время</h4>
				<form action="mail/mail.php" method="post">
					<div class='styled-select slate'>
=======
    		</div>
    	</div>
    </section>

    <section id="services">
	    <h1>Наши услуги</h1>
	    <div class="container">
	    	<div class="col-md-6">
		      <div class="swiper-slide slide-1">
		      	<div class="overlay"></div>
		      	<div class="description">
		      		<h4>Юридическое обслуживание</h4>
		      	</div>
		      	<a href="#" class="more-btn">Подробнее</a>
		      </div>
		      <div class="swiper-slide slide-2">
		      	<div class="overlay"></div>
		      	<div class="description">
		      		<h4>Регистрация юридических <br /> лиц, ИП, филлиалов <br /> и представительств</h4>
		      	</div>
		      	<a href="#" class="more-btn">Подробнее</a>
		      </div>
		      <div class="swiper-slide slide-3">
		      	<div class="overlay"></div>
		      	<div class="description">
		      		<h4>Банкротство физических <br /> и юридических лиц</h4>
		      	</div>
		      	<a href="#" class="more-btn">Подробнее</a>
		      </div>
		    </div>
	    	<div class="col-md-6">
		      <div class="swiper-slide slide-4">
		      	<div class="overlay"></div>
		      	<div class="description">
		      		<h4>Комплексное сопровождение <br /> бизнеса</h4>
		      	</div>
		      	<a href="#" class="more-btn">Подробнее</a>
		      </div>
		      <div class="swiper-slide slide-5">
		      	<div class="overlay"></div>
		      	<div class="description">
		      		<h4>Сделки с недвижимостью</h4>
		      	</div>
		      	<a href="#" class="more-btn">Подробнее</a>
		      </div>
		      <div class="swiper-slide slide-6">
		      	<div class="overlay"></div>
		      	<div class="description">
		      		<h4>Бухгалтерское обслуживание</h4>
		      	</div>
		      	<a href="#" class="more-btn">Подробнее</a>
		      </div>
		    </div>
		</div>
    </section>
    <section id="zay">
    	<div class="overlay">
    		<div class="container">
    			<h2>Получите индивидуальную консультацию</h2>
    			<h4>Выберите интересующую услугу, оставьте заявку, <br /> и мы свяжемся с Вами в ближайшее время</h4>
    			<form action="mail/mail.php" method="post">
    				<div class = 'styled-select slate'>
>>>>>>> 66a3888cb199d963b2b61042334df81b5ce097a9
						<select name="usluga">
							<option selected disabled value="Выберите услугу">Выберите услугу</option>
							<option value="Юридическое обслуживание">Юридическое обслуживание</option>
							<option value="Регистрация ЮЛ, ИП, филлиалов и представительств">
<<<<<<< HEAD
								Регистрация ЮЛ, ИП, филлиалов и представительств</option>
=======
							Регистрация ЮЛ, ИП, филлиалов и представительств</option>
>>>>>>> 66a3888cb199d963b2b61042334df81b5ce097a9
							<option value="Банкротство ФЛ, ЮЛ">Банкротство ФЛ, ЮЛ</option>
							<option value="Комплексное сопровождение бизнеса">Комплексное сопровождение бизнеса</option>
							<option value="Сделки с недвижимостью">Сделки с недвижимостью</option>
							<option value="Бухгалтерское обслуживание">Бухгалтерское обслуживание</option>
						</select>
					</div>
<<<<<<< HEAD
					<input type="text" name="name" placeholder="Введите имя" />
					<input type="tel" name="phone" placeholder="Введите телефон" required />
					<input class="sbmt-btn" type="submit" name="submit" value="Оставить заявку" />
				</form>
			</div>
		</div>
	</section>

	<section id="trust">
		<div class="container">
			<div class="row" style="margin-top: 0">
				<div class="col-md-12 col-xs-12">
					<h1>Почему нам доверились более 3000 организаций:</h1>
				</div>
			</div>
			<div class="row" style="margin-top: 30px">
				<div class="col-md-3">
					<h2><img src="img/001-help.svg" /></h2>
					<h4 class="description">мгновенная консультация <br> специалиста</h4>
				</div>
				<div class="col-md-3">
					<h2><img src="img/002-guarantee.svg" /></h2>
					<h4 class="description">работаем в срок <br /> и на результат</h4>
				</div>
				<div class="col-md-3">
					<h2><img src="img/diamond.svg" /></h2>
					<h4 class="description">исключительная <br /> компетентность</h4>
				</div>
				<div class="col-md-3">
					<h2><img src="img/presentation.svg" /></h2>
					<h4 class="description">НАДЁЖНОСТЬ <br> И ЦЕННОСТЬ РЕПУТАЦИИ, ПОДТВЕРЖДЁННОЙ В ТЕЧЕНИЕ 14 ЛЕТ</h4>
				</div>
			</div>
			<!--<div class="row">
=======
    				<input type="text" name="name" placeholder="Введите имя" />
    				<input type="tel" name="phone" placeholder="Введите телефон" required />
    				<input class="sbmt-btn" type="submit" name="submit" value="Оставить заявку" />
    			</form>
    		</div>
    	</div>
    </section>

    <section id="trust">
    	<div class="container">
    		<div class="row" style="margin-top: 0">
    			<div class="col-md-12 col-xs-12"><h1>Почему нам доверились более 3000 организаций:</h1></div>
    		</div>
    		<div class="row" style="margin-top: 30px">
    			<div class="col-md-3">
    				<h2><img src="img/001-help.svg" /></h2>
    				<h4 class="description">мгновенная консультация <br> специалиста</h4>
    			</div>
    			<div class="col-md-3">
    				<h2><img src="img/002-guarantee.svg" /></h2>
    				<h4 class="description">работаем в срок <br /> и на результат</h4>
    			</div>
    			<div class="col-md-3">
    				<h2><img src="img/diamond.svg" /></h2>
    				<h4 class="description">исключительная <br /> компетентность</h4>
    			</div>
    			<div class="col-md-3">
    				<h2><img src="img/presentation.svg" /></h2>
    				<h4 class="description">НАДЁЖНОСТЬ <br> И ЦЕННОСТЬ РЕПУТАЦИИ, ПОДТВЕРЖДЁННОЙ В ТЕЧЕНИЕ 14 ЛЕТ</h4>
    			</div>
    		</div>
    		<!--<div class="row">
>>>>>>> 66a3888cb199d963b2b61042334df81b5ce097a9
    			<div class="col-md-4 wow fadeInUp delay-02s">
    				<h4>Вы получите круглосуточную консультацию и поддержку на каждом этапе развития вашего дела</h4>
    			</div>
    			<div class="col-md-4 wow fadeInUp delay-04s">
    				<h4>Любое начатое дело будет доведено нами до конца без отлагательств и точно в срок</h4>
    			</div>
    			<div class="col-md-4 wow fadeInUp delay-06s">
    				<h4>Мы ценим свою репутацию, которая позволила нам занимать твердую позицию уже более 14 лет</h4>
    			</div>
    		</div>-->
<<<<<<< HEAD
	</section>

	<section id="abonem">
		<div class="container-fluid">
			<div class="col-md-6 left-block">
				<div class="overlay" style="transform: scale(-1, 1) !important;">
					<h2>Абонементское <br /> юридическое обслуживание</h2>
					<h4>Ваше дело в надёжных руках</h4>
					<a href="/legal_service/index.php">Узнать подробнее
						<svg class="abonem_logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" width="17" height="12">
							<style>
								tspan { white-space:pre }
		.shp0 { fill: #fff } 
	</style>
							<path id="Forma 1 копия" class="shp0" d="M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z" />
						</svg></a>
				</div>
			</div>
			<div class="col-md-6 right-block">
				<div class="overlay">
					<h2>Полное бухгалтерское <br /> сопровождение бизнеса</h2>
					<h4>Дешевле, чем вы думаете</h4>
					<a href="/accounting_services/index.php">Узнать подробнее <svg class="abonem_logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" width="17"
						 height="12">
							<style>
								tspan { white-space:pre }
		.shp0 { fill: #fff } 
	</style>
							<path id="Forma 1 копия" class="shp0" d="M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z" />
						</svg></a>
				</div>
			</div>
		</div>
	</section>

	<section id="history">
		<div class="container">
			<div class="col-md-12 left-block hidden-xs">
				<div class="overlay">
					<a class="active-tab" onclick="first()" id="tab1">История 1</a>

					<a onclick="second()" id="tab2">История 2</a>

					<a onclick="third()" id="tab3">История 3</a>

					<a onclick="fourth()" id="tab4">История 4</a>

					<section id="content1" style="display: block;">
						<p><b>История 1</b></p>
						<p>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel
							illum, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et
							expedita distinctio, quis nostrum exercitationem ullam corporis suscipit laboriosam, ut aut reiciendis
							voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat? Duis aute irure dolor in
							reprehenderit in voluptate, quis nostrum exercitationem ullam corporis suscipit laboriosam, qui dolorem ipsum,
							quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et
							dolore magnam aliquam quaerat voluptatem. Excepteur sint occaecat cupidatat non proident, qui blanditiis
							praesentium voluptatum deleniti atque corrupti, quos do
						</p>
					</section>

					<section id="content2">
						<p><b>История 2</b></p>
						<p>Bacon ipsum dolor sit amet landjaeger sausage brisket, jerky drumstick fatback boudin ball tip turducken. Pork
							belly meatball t-bone bresaola tail filet mignon kevin turkey ribeye shank flank doner cow kielbasa shankle. Pig
							swine chicken hamburger, tenderloin turkey rump ball tip sirloin frankfurter meatloaf boudin brisket ham hock.
							Hamburger venison brisket tri-tip andouille pork belly ball tip short ribs biltong meatball chuck. Pork chop
							ribeye tail short ribs, beef hamburger meatball kielbasa rump corned beef porchetta landjaeger flank. Doner rump
							frankfurter meatball meatloaf, cow kevin pork pork loin venison fatback spare ribs salami beef ribs.
						</p>
					</section>

					<section id="content3">
						<p><b>История 3</b></p>
						<p>S usage pig leberkas, t-bone sirloin shoulder bresaola. Frankfurter rump porchetta ham. Pork belly prosciutto
							brisket meatloaf short ribs.tip sirloin frankfurter meatloaf boudin brisket ham hock. Hamburger venison brisket
							tri-tip andouille pork belly ball tip short ribs biltong meatball chuck. Pork chop ribeye tail short ribs, beef
							hamburger meatball kielbasa rump corned beef porchetta landjaeger flank. Doner rump frankfurter meatball
							meatloaf, cow kevin pork pork loin venison fatback spare ribs salami beef ribs.
						</p>
					</section>

					<section id="content4">
						<p><b>История 4</b></p>
						<p>epellat? Duis aute irure dolor in reprehenderit in voluptate, quis nostrum exercitationem ullam corporis
							suscipit laboriosam, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam
							eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Excepteur sint occaecat
							cupidatat non proident, qui blanditiis praesentium volloin turkey rump ball tip sirloin frankfurter meatloaf
							boudin brisket ham hock. Hamburger venison brisket tri-tip andouille pork belly ball tip short ri</p>
					</section>
					<a id="prev-tab" class="prev-tab" onclick="prevTab()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12">
							<style>tspan { white-space:pre }.shp0 { fill: #272727 }</style>
							<path id="Forma 1 копия" class="shp0" d="M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z" />
						</svg></a>
					<a id="next-tab" class="next-tab" onclick="nextTab()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12">
							<style>tspan { white-space:pre }.shp0 { fill: #272727 }</style>
							<path id="Forma 1 копия" class="shp0" d="M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z" />
						</svg></a>
				</div>
			</div>
		</div>
	</section>

	<section id="messages">
		<div class="overlay">
			<div class="container">
				<div id="ras-form" class="form-block">
					<h2>Получите полезные материалы каждую неделю</h2>
					<h4>Подпишитесь на нашу email-рассылку</h4>
					<form action="mail/mail-2.php">
						<input type="text" name="name" placeholder="Введите имя" required />
						<input type="text" name="mail" placeholder="Введите E-Mail" required />
						<input class="sbmt-btn" type="submit" name="submit" value="Отправить заявку" />
					</form>
				</div>
			</div>
		</div>
	</section>

	<section name="article" id="article">
		<div class="container">
			<div class="row" style="margin-top: 0">
				<h1>Интересные статьи</h1>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="img"></div>
					<h4 class='article_title'>Lorem ipsum</h4>
					<h4>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel
						illum, sed do eiusmod tempor incididunt ut labore et dolore</h4>
					<a class="article-more" href="#">Читать далее <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" width="17"
						 height="12">
							<style>
								tspan {
									white-space: pre
								}

								.shp0 {
									fill: #272727
								}
							</style>
							<path id="Forma 1 копия" class="shp0" d="M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z" />
						</svg></a>
				</div>
				<div class="col-md-4">
					<div class="img"></div>
					<h4 class='article_title'>Lorem ipsum</h4>
					<h4>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel
						illum, sed do eiusmod tempor incididunt ut labore et dolore</h4>
					<a class="article-more" href="#">Читать далее <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" width="17"
						 height="12">
							<style>
								tspan {
									white-space: pre
								}

								.shp0 {
									fill: #272727
								}
							</style>
							<path id="Forma 1 копия" class="shp0" d="M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z" />
						</svg></a>
				</div>
				<div class="col-md-4">
					<div class="img"></div>
					<h4 class='article_title'>Lorem ipsum</h4>
					<h4>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel
						illum, sed do eiusmod tempor incididunt ut labore et dolore</h4>
					<a class="article-more" href="#">Читать далее <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" width="17"
						 height="12">
							<style>
								tspan {
									white-space: pre
								}

								.shp0 {
									fill: #272727
								}
							</style>
							<path id="Forma 1 копия" class="shp0" d="M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z" />
						</svg></a>
				</div>
			</div>
		</div>
	</section>

	<?php
=======
    </section>

    <section id="abonem">
    	<div class="container-fluid">
    		<div class="col-md-6 left-block">
    			<div class="overlay" style="transform: scale(-1, 1) !important;">
    				<h2>Абонементское <br /> юридическое обслуживание</h2>
    				<h4>Ваше дело в надёжных руках</h4>
    				<a href="#">Узнать подробнее 
						<svg class="abonem_logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" width="17" height="12">
	<style>
		tspan { white-space:pre }
		.shp0 { fill: #fff } 
	</style>
	<path id="Forma 1 копия" class="shp0" d="M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z" />
</svg></a>
    			</div>
    		</div>
    		<div class="col-md-6 right-block">
    			<div class="overlay">
    				<h2>Полное бухгалтерское <br /> сопровождение бизнеса</h2>
    				<h4>Дешевле, чем вы думаете</h4>
    				<a href="#">Узнать подробнее <svg class="abonem_logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" width="17" height="12">
	<style>
		tspan { white-space:pre }
		.shp0 { fill: #fff } 
	</style>
	<path id="Forma 1 копия" class="shp0" d="M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z" />
</svg></a>
    			</div>
    		</div>
    	</div>
    </section>

<section id="history">
	<div class="container">
		<div class="col-md-12 left-block hidden-xs">
		  <div class="overlay">
			  <a class="active-tab" onclick="first()" id="tab1">История 1</a>
			    
			  <a onclick="second()" id="tab2">История 2</a>
			    
			  <a onclick="third()" id="tab3">История 3</a>
			    
			  <a onclick="fourth()" id="tab4">История 4</a>

			  <section id="content1" style="display: block;">
			    <p><b>История 1</b></p>
			    <p>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio, quis nostrum exercitationem ullam corporis suscipit laboriosam, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat? Duis aute irure dolor in reprehenderit in voluptate, quis nostrum exercitationem ullam corporis suscipit laboriosam, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Excepteur sint occaecat cupidatat non proident, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos do
			    </p>
			  </section>
		    
			  <section id="content2">
			    <p><b>История 2</b></p>
			    <p>Bacon ipsum dolor sit amet landjaeger sausage brisket, jerky drumstick fatback boudin ball tip turducken. Pork belly meatball t-bone bresaola tail filet mignon kevin turkey ribeye shank flank doner cow kielbasa shankle. Pig swine chicken hamburger, tenderloin turkey rump ball tip sirloin frankfurter meatloaf boudin brisket ham hock. Hamburger venison brisket tri-tip andouille pork belly ball tip short ribs biltong meatball chuck. Pork chop ribeye tail short ribs, beef hamburger meatball kielbasa rump corned beef porchetta landjaeger flank. Doner rump frankfurter meatball meatloaf, cow kevin pork pork loin venison fatback spare ribs salami beef ribs.
			    </p>
			  </section>
		    
			  <section id="content3">
			    <p><b>История 3</b></p>
			    <p>S usage pig leberkas, t-bone sirloin shoulder bresaola. Frankfurter rump porchetta ham. Pork belly prosciutto brisket meatloaf short ribs.tip sirloin frankfurter meatloaf boudin brisket ham hock. Hamburger venison brisket tri-tip andouille pork belly ball tip short ribs biltong meatball chuck. Pork chop ribeye tail short ribs, beef hamburger meatball kielbasa rump corned beef porchetta landjaeger flank. Doner rump frankfurter meatball meatloaf, cow kevin pork pork loin venison fatback spare ribs salami beef ribs.
			    </p>
			  </section>
		    
			  <section id="content4">
			    <p><b>История 4</b></p>
			    <p>epellat? Duis aute irure dolor in reprehenderit in voluptate, quis nostrum exercitationem ullam corporis suscipit laboriosam, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Excepteur sint occaecat cupidatat non proident, qui blanditiis praesentium volloin turkey rump ball tip sirloin frankfurter meatloaf boudin brisket ham hock. Hamburger venison brisket tri-tip andouille pork belly ball tip short ri</p>
			  </section>
		  		<a id="prev-tab" class="prev-tab" onclick="prevTab()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12"><style>tspan { white-space:pre }.shp0 { fill: #272727 }</style>
				<path id="Forma 1 копия" class="shp0" d="M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z" />
				</svg></a>
		  		<a id="next-tab" class="next-tab" onclick="nextTab()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12"><style>tspan { white-space:pre }.shp0 { fill: #272727 }</style>
				<path id="Forma 1 копия" class="shp0" d="M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z" />
				</svg></a>
		  	</div>
		</div>
	</div>
</section>

<section id="messages">
	<div class="overlay">
		<div class="container">
			<div id="ras-form" class="form-block">
	    		<h2>Получите полезные материалы каждую неделю</h2>
	    		<h4>Подпишитесь на нашу email-рассылку</h4>
				<form action="mail/mail-2.php" >
					<input type="text" name="name" placeholder="Введите имя" required />
					<input type="text" name="mail" placeholder="Введите E-Mail" required />
					<input class="sbmt-btn" type="submit" name="submit" value="Отправить заявку" />
				</form>
			</div>
		</div>
	</div>
</section>

<section name="article" id="article">
	<div class="container">
		<div class="row" style="margin-top: 0"><h1>Интересные статьи</h1></div>
		<div class="row">
			<div class="col-md-4">
				<div class="img"></div>
				<h4 class='article_title'>Lorem ipsum</h4>
				<h4>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, sed do eiusmod tempor incididunt ut labore et dolore</h4>
				<a class="article-more" href="#">Читать далее <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" width="17" height="12">
	<style>
		tspan { white-space:pre }
		.shp0 { fill: #272727 } 
	</style>
	<path id="Forma 1 копия" class="shp0" d="M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z" />
</svg></a>
			</div>
			<div class="col-md-4">
				<div class="img"></div>
				<h4 class='article_title'>Lorem ipsum</h4>
				<h4>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, sed do eiusmod tempor incididunt ut labore et dolore</h4>
				<a class="article-more" href="#">Читать далее <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" width="17" height="12">
	<style>
		tspan { white-space:pre }
		.shp0 { fill: #272727 } 
	</style>
	<path id="Forma 1 копия" class="shp0" d="M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z" />
</svg></a>
			</div>
			<div class="col-md-4">
				<div class="img"></div>
				<h4 class='article_title'>Lorem ipsum</h4>
				<h4>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, sed do eiusmod tempor incididunt ut labore et dolore</h4>
				<a class="article-more" href="#">Читать далее <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 12" width="17" height="12">
	<style>
		tspan { white-space:pre }
		.shp0 { fill: #272727 } 
	</style>
	<path id="Forma 1 копия" class="shp0" d="M11.38,1.04c-0.23,-0.2 -0.61,-0.2 -0.84,0c-0.23,0.2 -0.23,0.53 0,0.72l4.28,3.71h-14.14c-0.33,0 -0.59,0.23 -0.59,0.51c0,0.29 0.26,0.52 0.59,0.52h14.14l-4.28,3.7c-0.23,0.2 -0.23,0.53 0,0.73c0.24,0.2 0.62,0.2 0.84,0l5.3,-4.59c0.24,-0.2 0.24,-0.53 0,-0.72z" />
</svg></a>
			</div>
		</div>
	</div>
</section>

<?php
>>>>>>> 66a3888cb199d963b2b61042334df81b5ce097a9
require('footer.php');
?>