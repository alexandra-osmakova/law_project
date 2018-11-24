<!DOCTYPE html>
<html>
<head>
	<title>О нас | Юрбизнесгруп</title>
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
	<section id="main" class="about-main"></section>
    <section id="about-second">
    	<div class="container">
    		<div class="row about_main_content">
				<div class="col-md-7">
					<h3>О нас</h3>
					<p>Нами накоплен большой положительный опыт ведения арбитражных дел любой сложности во всех судебных инстанциях: первой, апелляционной, кассационной и надзорной, - по спорам, возникающим в различных отраслях законодательства РФ (гражданском, налоговом, коммерческом, корпоративном, трудовом, земельном законодательстве, законодательстве о техническом регулировании, об административных правонарушениях и иных).</p>
					<ul>
						<li>Более 18 человек высококвалифицированных специалистов, <br /> прошедших жесткий отбор при приеме на работу. </li>
						<li>Профессиональный стаж работы каждого из юристов <br /> составляет более 7 лет.</li>
						<li>Средний показатель количества судебных заседаний в день <br /> на одного юриста в 2018 г. составил 1,26.</li>
					</ul>
				</div>
				<div class="col-md-5">
					<img src="../img/14-year.png" />
				</div>
			</div>
    		<div class="row row-2 about_main_content">
				<div class="col-md-5">
					<img src="../img/10-city.png" />
				</div>
				<div class="col-md-7">
					<p>Помимо самого города Казань и Республики Татарстан мы успешно осуществляем свою деятельность в городах Москва и Санкт-Петербург, Удмуртской Республике, Республике Башкортостан, Краснодарском крае, Московской, Самарской, Нижегородской, Владимирской, Кировской, Свердловской, Пензенской областях и других регионах РФ.</p>
					<ul>
						<li>В случае необходимости наши юристы готовы выехать <br /> в любой город России.</li>
					</ul>
					<a href="../services" class="zay-btn">Ознакомиться со всеми услугами</a>
				</div>
			</div>
    	</div>
    </section>

    <section id="messages" class="about-consult">
		<div class="overlay">
			<div class="container">
				<div id="ras-form" class="form-block">
		    		<h2><b>получите бесплатную консультацию</b></h2>
		    		<h4>Наша компания оказывает широкий спектр услуг как для физических, так и для юридических лиц. <br />
					Рекомендуем Вам сначала обратиться за бесплатной консультацией.</h4>
					<form action="mail/mail-2.php" >
						<input type="text" name="name" placeholder="Введите имя" required />
						<input type="text" name="mail" placeholder="Введите E-Mail" required />
						<input class="sbmt-btn" type="submit" name="submit" value="Отправить заявку" />
					</form>
				</div>
			</div>
		</div>
	</section>

	<section id="clients">
		<div class="container">
			<h3>Наши клиенты</h3>
			<ul>
				<li>ГУ Республиканский центр внешкольной работы Министерства образования Республики Татарстан</li>
				<li>Комитет Республики Татарстан по социально-экономическому мониторингу</li>
				<li>Прокуратура Кировского района г. Казани</li>
				<li>МБУЗ «Зеленодольская детская городская больница»</li>
				<li>МВД Советского района г. Казани</li>
				<li>Центр управления силами ФПС</li>
				<li>МУЗ «Детская стоматологическая поликлиника»</li>
				<li>ОАО «Казанское моторостроительное производственное объединение»</li>
				<li>ДОАО «Центрэнергогаз» ОАО «Газпром»</li>
				<li>ЗАО «Русь-Банк»</li>
				<li class="hide-li">ЗАО «Канал 6»</li>
				<li class="hide-li">ООО «Казанский завод медицинской аппаратуры»</li>
				<li class="hide-li">филиал ОАО Татмедиа «Редакция журнала «Салават купере»</li>
				<li class="hide-li">журнал «Autotat.ru»</li>
				<li class="hide-li">ООО «1С: Мультимедиа Казань»</li>
				<li class="hide-li">ООО «Кан-Автоваз»</li>
				<li class="hide-li">ООО «Сувар-Отель»</li>
				<li class="hide-li">ООО «Планета развлечений - Казань»</li>
				<li class="hide-li">ООО «Агава»</li>
				<li class="hide-li">"Кофе Хауз"</li> 
			</ul>
			<a class="show-li">Ещё ...</a>
		</div>
	</section>

<?php
require('../footer.php');
?>