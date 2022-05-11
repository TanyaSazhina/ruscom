<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Растениеводство</title>
</head>

<body>
    <?php
    include "header.php"
    ?>
    <main class="page crop">
        <div class="preview-dir__title">
            <h1 class="container element-animation">
                Растениеводство
            </h1>
        </div>

        <div class="certificate">
            <div class="certificate__container container">
                <p class="certificate__text">
                    Рецептура разрабатывается с учетом физиологии животного и условий содержания
                </p>
                <picture>
                    <source srcset="img/sert.svg" type="image/webp"><img class="certificate__img" src="img/sert.svg" alt="certificate">
                </picture>
            </div>
        </div>
        <div class="dir__description container">
            <p>Общая площадь посевных площадей посевных площадей в
                ООО «РУСКОМ-Агро» составляет 29 353 гектара. По сравнению с прошлым годом площадь
                посевов увеличилась почти на 30%. Большая часть сельхозугодий отведена под пшеницу –
                более 15 000 га.</p>
            <p>Ежегодно особое внимание на предприятии уделяется
                севообороту, вводятся новые культуры. Например, в этом году начали выращивать картофель
                и подсолнечник. В этом году были увеличены посевы гороха.</p>
        </div>
        <div class="dir-features">
            <div class="dir-features__container container">
                <h2 class="dir-features__title">
                    Занимаемся возделыванием культурных растений
                    исключительно высокого качества
                </h2>
                <div class="dir-features__content">
                    <div class="dir-features__item">
                        <picture>
                            <source srcset="img/directions/crop.webp" type="image/webp"><img src="img/directions/crop.jpg" class="dir-features__item-img element-animation" alt="features">
                        </picture>
                        <div class="dir-features__item-text">
                            <h3 class="dir-features__item-title title">
                                Контроль сырья
                            </h3>
                            <div class="dir-features__item-description">
                                100 единиц современного аналитического и измерительного оборудования позволяют проверить
                                и
                                подтвердить качество сырьевых компонентов.
                            </div>
                        </div>
                    </div>
                    <div class="dir-features__item">
                        <picture>
                            <source srcset="img/directions/crop2.webp" type="image/webp"><img src="img/directions/crop2.jpg" class="dir-features__item-img element-animation" alt="features">
                        </picture>
                        <div class="dir-features__item-text">
                            <h3 class="dir-features__item-title title">
                                Высочайшая точность дозирования
                            </h3>
                            <div class="dir-features__item-description">
                                Для производства комбикормов используется высокотехнолоческое швейцарское оборудование
                                фирмы
                                Buhler AG, с возможностью осуществления микродозирования. </div>
                        </div>
                    </div>
                    <div class="dir-features__item">
                        <picture>
                            <source srcset="img/directions/crop3.webp" type="image/webp"><img src="img/directions/crop3.jpg" class="dir-features__item-img element-animation" alt="features">
                        </picture>
                        <div class="dir-features__item-text">
                            <h3 class="dir-features__item-title title">
                                Высокоэффективное смешивание
                            </h3>
                            <div class="dir-features__item-description">
                                Производить смешивание с контролем скорости и автоматической системой весового контроля
                                фирмы Siemens.
                            </div>
                        </div>
                    </div>
                    <div class="dir-features__item">
                        <picture>
                            <source srcset="img/directions/crop4.webp" type="image/webp"><img src="img/directions/crop4.jpg" class="dir-features__item-img element-animation" alt="features">
                        </picture>
                        <div class="dir-features__item-text">
                            <h3 class="dir-features__item-title title">
                                Контроль готовой продукции
                            </h3>
                            <div class="dir-features__item-description">
                                Обеспечиваем дополнительный контроль качества на этапах производства и ключевой контроль
                                готовой продукции.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    include "footer.php"
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/script.js"></script>
</body>

</html>