<!DOCTYPE html>
<html>
<head>
	<title>Контакты | Юрбизнесгруп</title>
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
	<link rel="stylesheet" type="text/css" href="../css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="../css/modal.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">	
	<script src="https://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script>
</head>
<body> 
	<style>
	    #map{display:none}
	</style>
<?php
	require('../header.php');
	?>
   <section id="contact-map">
		<script class="hidden-xs" type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A63e35b1024969d4c36c1658b1ac03ffa692b3986c87ecf55a4f77c73545c1ff0&amp;width=100%25&amp;height=800px&amp;lang=ru_RU&amp;scroll=true"></script>
   		<div class="contact-info">
			<h3>Главный офис в г. Казань:</h3>
			<p>Свяжитесь с нами:</p>
			<ul>
				<li><i class="fa fa-map-marker" area-hidden="true"></i>г. Казань, ул. Проточная, 8, 2 этаж, офис 218, 219</li>
				<li><a href="tel: 8(843) 518-89-89"><i class="fa fa-phone" area-hidden="true"></i>+7 (843) 518-89-89</a></li>
				<li><a href="mailto: 51889892@mail.ru"><i class="fa fa-envelope" area-hidden="true"></i>51889892@mail.ru</a></li>
			</ul>
			<p>Или закажите обратный звонок от оперетора:</p>
			<button class="zay-btn open-modal"><i class="fa fa-phone"></i>Отправить заявку</button>
   		</div>
   </section>

<?php
require('../footer.php');
?>