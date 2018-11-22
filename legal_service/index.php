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
        <div class="legal_servics_background">
            <div class="overlay">
                <div class="legal_servics_main_content content">
                    <p>Юридическое обслуживание <br> от 4000 руб. в месяц</p>
                    <button class="article_more_btn more-btn open-modal">Получить консультацию</button>
                </div>
            </div>
        </div>
    </section>
    <section class="included_points" id="legal_servics_points">
        <h2>Что входит в услугу юридического обслуживания?</h2>
        <div class="included_points_content">
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Арбитражные споры в судах всех уровней</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Суды общей юрисдикции, мировые, районные суды</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Претензионно-исковая работа</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Налоговые споры</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Взыскание задолженности</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Избавление от кредитной зависимости</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Земельные споры</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Административные споры, обжалование штрафов</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Трудовые споры</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Жилищные споры</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Представление интересов в государственных <br> и муниципальных
                    органах</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Автоспоры (ДТП)</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Взыскание страховых выплат <br>(ОСАГО, КАСКО, страхование жизни, имущества)</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Защита прав потребителей</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Семейные споры (взыскание алиментов, <br> определение места жительства ребенка, раздел имущества)</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Наследственные споры (сбор документов, <br> восстановление срокадля принятия наследства, <br>
                    оспаривание завещания)</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Узаконение перепланировок, самовольных построек</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Договорная работа (анализ и экспертиза договоров, <br> составление договоров, актов, протоколов
                    разногласий)</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Проверка надежности контрагентов</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Сопровождение государственных закупок и контрактов</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Таможенные споры</span>
            </div>
            <div class="included_points__item">
                <div class="included_points__item_mark">
                    <svg version="1.1" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="included_points__item_img" d="m504.5 75.496c-9.997-9.998-26.205-9.998-36.204 0l-306.7 306.71-117.89-117.89c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.99 135.99c9.994 9.997 26.214 9.99 36.204 0l324.81-324.81c9.998-9.997 9.997-26.206 0-36.204z" />
                    </svg>
                </div>
                <span>Снижение кадастровой стоимости недвижимого имущества</span>
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