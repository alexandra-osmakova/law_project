<!DOCTYPE html>
<html>
<head>
	<title>Услуги | Юрбизнесгруп</title>
	<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=no">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="../img/favicon.png">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.css">
	<link rel="stylesheet" type="text/css" href="../css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="../css/modal.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">	
	<script src="https://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script>
	<script type="text/javascript">
	    // Создает обработчик события window.onLoad
	    YMaps.jQuery(function () {
	        // Создает экземпляр карты и привязывает его к созданному контейнеру
	        var map = new YMaps.Map(YMaps.jQuery("#YMapsID")[0]);

	        // Устанавливает начальные параметры отображения карты: центр карты и коэффициент масштабирования
	        map.setCenter(new YMaps.GeoPoint(49.040005, 55.800287 ), 5);

function myLayout(context, map, owner) {
    var element = YMaps.jQuery('<div style="width: 40px; height: 40px; background-image: url(../img/point.png);background-size: contain;background-position: center center;background-repeat: no-repeat;"></div>');
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
                    <div class="nav-number">
                      <a class="nav_href_tel" href="tel: +7(843)518-89-89">
                        <i class="fa fa-phone"></i>
                        <span class='tel_number'>+7 (843) 518-89-89</span> 
                      </a>
                    </div>
		            <div class="search-btn">
		              <a class="search-ico"><i class="fa fa-search"></i></a>
		            </div>
                  </div>
		        </div>
			</div>
			<hr />
			<div class="navbar-botom container">
				<ul>
					<li><a href="../about/">О нас</a></li>
					<li><a href="../services/">Услуги</a></li>
					<li><a href="../article/">Статьи</a></li>
					<li><a href="../contact/">Контакты</a></li>
					<li class="signup_nav_section"><a href="../signup/">Регистрация</a> | <a href="../signin/">Вход</a></li>
				</ul>
			</div>
		</div>
	</div>

    <section id="main">
	    <div class="services_background">
			<div class="overlay">
				<div class="content">
			    	<h1>Услуги</h1>
			    	<p>Наша компания оказывает широкий спектр услуг как для физических,<br />
								так и для юридических лиц. Рекомендуем Вам сначала обратиться за бесплатной <br />
								консультацией.</p>
			    	<a href="#" class="more-btn">Получить бесплатную консультацию</a>
			    </div>
			</div>
		</div>
    </section>

    <section id="list">
    	<div class="container">
    		<table>
    			<tr>
    				<td>Услуга</td>
    				<td class="table_price">Цена</td>
    				<td></td>
    			</tr>
    			<tr>
    				<td>Бухгалтерское обслуживание</td>
    				<td class="table_price">от 5000 Р</td>
    				<td><button>Подробнее</button></td>
    			</tr>
    			<tr>
    				<td>Юридическое обслуживание</td>
    				<td class="table_price">от 5000 Р</td>
    				<td><button>Подробнее</button></td>
    			</tr>
    			<tr>
    				<td>Комплексное сопровождение бизнеса</td>
    				<td class="table_price">от 5000 Р</td>
    				<td><button>Подробнее</button></td>
    			</tr>
    			<tr>
    				<td>Регистрация юридических лиц, ИП, филиалов и представительств</td>
    				<td class="table_price">от 5000 Р</td>
    				<td><button>Подробнее</button></td>
    			</tr>
    			<tr>
    				<td>Банкротство физических и юридических лиц</td>
    				<td class="table_price">от 5000 Р</td>
    				<td><button>Подробнее</button></td>
    			</tr>
    			<tr>
    				<td>Сделки с недвижимостью</td>
    				<td class="table_price">от 5000 Р</td>
    				<td><button>Подробнее</button></td>
    			</tr>
    		</table>
    	</div>
    </section>
<section id="services-modal">
	<div class="modal-container">
		<div class="modal-header">
			<a class="services-close-modal">&times;</a>
			<h3></h3>
		</div>
		<div class="modal-text">
			<p>Задача организации, в особенности же постоянный количественный рост и сфера нашей активности в значительной степени обуславливает создание форм воздействия. Значимость этих проблем настолько очевидна, что сложившаяся структура организации позволяет выполнить важнейшие задания по разработке дальнейших направлений развития проекта</p>
			<span>В услугу входит:</span>
			<ul>
				<li>создание форм воздействия</li>
				<li>создание форм воздействия</li>
				<li>создание форм воздействия</li>
				<li>создание форм воздействия</li>
				<li>создание форм воздействия</li>
				<li>создание форм воздействия</li>
			</ul>
		</div>
		<div class="modal-footer">
			<h5>Получите консультацию опытного юриста</h5>
			<form method="post" action="../mail/mail.php">
				<input class="col-md-6" type="tel" name="phone" placeholder="Введите Ваш телефон" required />
				<input class="col-md-5 col-md-offset-1" type="submit" name="submit" value="Получить консультацию" />
				<hr />
					<label class="col-md-7" for="profile_agree">
						<input checked type="checkbox" name="profile_agree" id="profile_agree" required/>
						Согласен с политикой конфиденциальности
					</label>
			</form>
		</div>
	</div>
</section>
<script>
		
	var more_btn = document.getElementsByClassName('more-btn')[0];
	var services_modal = document.getElementById('services-modal');
	var services_close_modal =document.getElementsByClassName('services-close-modal')[0];

	more_btn.addEventListener('click', function() {
		services_modal.classList.add('activ');
	})

	services_close_modal.addEventListener('click', function() {
		services_modal.classList.remove('activ');
	})
</script>
<?php
require('../footer.php');
?>