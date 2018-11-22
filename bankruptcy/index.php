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
        <div class="bankruptcy_background">
            <div class="overlay">
                <div class="business_support_main_content content">
                    <p>Банкротство физических <br> и юридических лиц</p>
                    <button class="article_more_btn more-btn open-modal">Получить консультацию</button>
                </div>
            </div>
        </div>
    </section>
    <section class="included_points" id="business_support_points">
        <h2>Основные услуги по делам о банкротстве:</h2>
        <div class="included_points_content">
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Устные и письменные консультации по законодательству <br>
                    Российской Федерации о несостоятельности (банкротстве)</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Анализ финансового состояния должника на основе изучения <br>
                    документов с выдачей мотивированного заключения о наличии <br>
                    признаков несостоятельности (банкротства) должника <br>
                    и перспективности дела о банкротстве в арбитражном суде.</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Составление и подготовка заявления в арбитражный суд <br> о признании
                    должника несостоятельным (банкротом), <br> в том числе
                    в случае ликвидации должника.</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Составление и подготовка документов по делам <br> о несостоятельности
                    (банкротстве), уже находящихся <br> в производстве арбитражного суда <br>
                    (отзывов на заявление конкурсных кредиторов <br> и уполномоченных
                    органов, <br> процессуальных заявлений и ходатайств и т.д.).</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Представительство интересов должника <br> в арбитражных судах
                    по делам о банкротстве:
                    <ul>
                        <li>в арбитражном суде первой инстанции;</li>
                        <li>в арбитражном суде апелляционной инстанции;</li>
                        <li>в арбитражном суде кассационной инстанции;</li>
                        <li>в Высшем Арбитражном Суде Российской Федерации <br> (в суде
                            надзорной инстанции).</li>
                    </ul>
                </span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Составление и подготовка необходимых юридических документов <br>
                    по всем вопросам взаимодействия с арбитражным <br> управляющим,
                    судебными приставами-исполнителями, <br> кредиторами и иными
                    лицами, <br> предусмотренными федеральным законом о банкротстве.</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Представительство интересов должника перед арбитражным <br>
                    управляющим, судебными приставами-исполнителями, <br> кредиторами
                    и иными лицами по вопросам <br> исполнения судебных актов,
                    вынесенных арбитражным судом <br> по делу о банкротстве.</span>
            </div>
        </div>
    </section>
    <section id="messages" class="accounting_services_btn_message">
        <div class="overlay">
            <div class="container">
                <div id="ras-form" class="form-block">
                    <h2>Стоимость юридического обслуживания <br>
                        в ООО "ЮРБИЗНЕСГРУП" начинается от 2000 р.</h2>
                    <h4>Узнайте больше о стоимости у менеджера по работе с клиентами</h4>
                    <input class="accounting_services sbmt-btn" type="submit" value="Получить консультацию менеджера">
                </div>
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
                        <h4>Регистрация юридических <br> лиц, ИП, филлиалов <br> и представительств</h4>
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
</body>
<?php
require('../footer.php');
?>
</html>