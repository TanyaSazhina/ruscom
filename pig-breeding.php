<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Свиноводство</title>
</head>

<body>
    <?php
    include "header.php"
    ?>
    <main class="page pig">
        <div class="preview-dir__title">
            <h1 class="container element-animation">
                Свиноводство
            </h1>
        </div>
        <div class="certificate">
            <div class="certificate__container container">
                <p class="certificate__text">
                    Свиноводческий комплекс «Руском Агро» соответствует критериям, предъявляемым требованиям IV
                    компартмента (высшая степень биологической защиты) </p>
                <picture>
                    <source srcset="img/sert.svg" type="image/webp"><img class="certificate__img" src="img/sert.svg" alt="certificate">
                </picture>
            </div>
        </div>
        <div class="dir__description container">
            <p>Свиноводческий комплекс «РУСКОМ» рассчитан на 110 000
                голов. Благодаря отборному генофонду и прогрессивным технологиям успешно выращивают
                элитных животных. Животные обладают выдающимся генетическим потенциалом: одна свиноматка
                может дать до 36 поросят в год.</p>
            <p>Строжайший ветеринарно-санитарный режим на предприятии
                служит гарантией сохранения идеального статуса здоровья поголовья на протяжении многих
                лет.</p>
        </div>
        <div class="dir-features">
            <div class="dir-features__container container">
                <h2 class="dir-features__title">
                    Производим свинину
                    исключительно высокого качества
                </h2>
                <div class="dir-features__content">
                    <div class="dir-features__item">
                        <picture>
                            <source srcset="img/directions/pig.webp" type="image/webp"><img src="img/directions/pig.jpg" class="dir-features__item-img element-animation" alt="features">
                        </picture>
                        <div class="dir-features__item-text">
                            <h3 class="dir-features__item-title title">
                                Cвиньи элитных пород

                            </h3>
                            <div class="dir-features__item-description">
                                Племенное поголовье Hermitage Genetics (Ирландия) позволяет выращивать элитных животных
                                пород крупная белая, ландрас, дюрок, хайгроу пьетрен и хайлин максгро. Данные породы
                                характеризуются беконным направлением продуктивности, что определяет качество мяса на
                                выходе.
                            </div>
                        </div>
                    </div>
                    <div class="dir-features__item">
                        <picture>
                            <source srcset="img/directions/pig2.webp" type="image/webp"><img src="img/directions/pig2.jpg" class="dir-features__item-img element-animation" alt="features">
                        </picture>
                        <div class="dir-features__item-text">
                            <h3 class="dir-features__item-title title">
                                Корм собственного производства

                            </h3>
                            <div class="dir-features__item-description">
                                Все животные питаются кормами, поступающими с комбикормового завода «Пушкинский».
                                Автоматизированная система кормления дает возможность эффективно и дозировано
                                обеспечивать животных нужным объемом полнорационных кормов. </div>
                        </div>
                    </div>
                    <div class="dir-features__item">
                        <picture>
                            <source srcset="img/directions/pig3.webp" type="image/webp"><img src="img/directions/pig3.jpg" class="dir-features__item-img element-animation" alt="features">
                        </picture>
                        <div class="dir-features__item-text">
                            <h3 class="dir-features__item-title title">
                                Высокие стандарты гигиены и безопасности

                            </h3>
                            <div class="dir-features__item-description">
                                На свинокомплексе и мясокомбинате установлено оборудование Big Dutchman и BANSS
                                (Германия), SHALLER (Австрия), STORK (Голландия), что позволяет обеспечить высокие
                                стандарты гигиены в зоне содержания животных.
                            </div>
                        </div>
                    </div>
                    <div class="dir-features__item">
                        <picture>
                            <source srcset="img/directions/meat.webp" type="image/webp"><img src="img/directions/meat.jpg" class="dir-features__item-img element-animation" alt="features">
                        </picture>
                        <div class="dir-features__item-text">
                            <h3 class="dir-features__item-title title">
                                Качественный забой и обвалка продукции

                            </h3>
                            <div class="dir-features__item-description">
                                Мы используем уникальную технологию обработки свиных полутуш, профессиональную обвалку
                                мяса, и обеспечиваем соответствие требованиям ГОСТ на производстве.
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