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
<?php
	require('../header.php');
	?>

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
<?php
require('../footer.php');
?>