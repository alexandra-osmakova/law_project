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
            map.setCenter(new YMaps.GeoPoint(49.040005, 55.800287), 5);

            function myLayout(context, map, owner) {
                var element = YMaps.jQuery(
                    '<div style="width: 40px; height: 40px; background-image: url(../img/point.png);background-size: contain;background-position: center center;background-repeat: no-repeat;"></div>'
                );
                this.onAddToParent = function (parentNode) {
                    element.appendTo(parentNode);
                };
                this.onRemoveFromParent = function () {
                    element.remove();
                };
                this.update = function () {};
                this.getOffset = function () {
                    return new YMaps.Point(-20, -40);
                };
                this.getRootNodes = function () {
                    return element;
                };

            };
            var myStyle = new YMaps.Style();
            myStyle.iconStyle = new YMaps.IconStyle(new YMaps.LayoutTemplate(myLayout));
            var myPlacemark = new YMaps.Placemark(map.getCenter(), {
                style: myStyle
            });
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
        <div class="real_estate_background">
            <div class="overlay">
                <div class="business_support_main_content content">
                    <p>Сделки с недвижимостью</p>
                    <button class="article_more_btn more-btn open-modal">Получить консультацию</button>
                </div>
            </div>
        </div>
    </section>
    <section id="list">
        <h2>Услуги сделок с недвижимостью:</h2>
        <div class="container">
            <table>
                <tbody>
                    <tr>
                        <td>Услуга</td>
                        <td class="table_price">Цена</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Регистрация прав на недвижимость, в том числе через суд</td>
                        <td class="table_price">от 5000 Р</td>
                        <td><button>Подробнее</button></td>
                    </tr>
                    <tr>
                        <td>Электронная регистрация сделок с недвижимостью</td>
                        <td class="table_price">от 5000 Р</td>
                        <td><button>Подробнее</button></td>
                    </tr>
                    <tr>
                        <td>Восстановление прав на недвижимость</td>
                        <td class="table_price">от 5000 Р</td>
                        <td><button>Подробнее</button></td>
                    </tr>
                    <tr>
                        <td>Сопровождение сделок с недвижимостью</td>
                        <td class="table_price">от 5000 Р</td>
                        <td><button>Подробнее</button></td>
                    </tr>
                    <tr>
                        <td>Проверка юридической чистоты сделки</td>
                        <td class="table_price">от 5000 Р</td>
                        <td><button>Подробнее</button></td>
                    </tr>
                    <tr>
                        <td>Получение выписок</td>
                        <td class="table_price">от 5000 Р</td>
                        <td><button>Подробнее</button></td>
                    </tr>
                    <tr>
                        <td>Сопровождение ипотечных сделок</td>
                        <td class="table_price">от 5000 Р</td>
                        <td><button>Подробнее</button></td>
                    </tr>
                    <tr>
                        <td>Подготовка документов для получения ипотечного кредита</td>
                        <td class="table_price">от 5000 Р</td>
                        <td><button>Подробнее</button></td>
                    </tr>
                    <tr>
                        <td>Сохранение предмета залога при неплатежеспособности заемщика</td>
                        <td class="table_price">от 5000 Р</td>
                        <td><button>Подробнее</button></td>
                    </tr>
                    <tr>
                        <td>Помощь в реструктуризации задолженности по ипотечному кредиту</td>
                        <td class="table_price">от 5000 Р</td>
                        <td><button>Подробнее</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section id="messages" class="accounting_services_btn_message">
        <div class="overlay">
            <div class="container">
                <div id="ras-form" class="form-block">
                    <h2>Узнайте больше об услугах</h2>
                    <h4>Узнайте больше о стоимости у менеджера по работе с клиентами</h4>
                    <input class="accounting_services sbmt-btn" type="submit" value="Получить консультацию менеджера">
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <h1>Возможно, вам будет интересны другие услуги:</h1>
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
                        <h4>Регистрация юридических <br> лиц, ИП, филлиалов <br> и представительств</h4>
                    </div>
                    <a href="#" class="more-btn">Подробнее</a>
                </div>
                <div class="swiper-slide slide-3">
                    <div class="overlay"></div>
                    <div class="description">
                        <h4>Банкротство физических <br> и юридических лиц</h4>
                    </div>
                    <a href="#" class="more-btn">Подробнее</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="swiper-slide slide-4">
                    <div class="overlay"></div>
                    <div class="description">
                        <h4>Комплексное сопровождение <br> бизнеса</h4>
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
</body>
<?php
require('../footer.php');
?>

</html>