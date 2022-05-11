<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Главная</title>
</head>

<body>
    <?php
    include "header.php"
    ?>
    <main class="page">
        <section class="preview">
            <h1 class="preview__title">
                Руском Агро
            </h1>
            <div class="preview__subtitle">
                Взгляните на нашу прекрасную ферму
            </div>
            <div class="preview__bg">
                <video class="video-bg" autoplay muted loop>
                    <source src="img/preview.webm" type="video/webm">
                    <source src="img/preview.mp4" type="video/mp4">
                </video>
            </div>
        </section>
        <section class="about" id="about">
            <div class="about__container container">
                <picture>
                    <source srcset="img/about.webp" type="image/webp"><img class="about__parallax" src="img/about.jpg" alt="photo">
                </picture>
                <h2 class="about__title title element-animation">
                    О нас
                </h2>
                <div class="about__text element-animation">
                    <p class="about__text-paragraph">
                        ООО «РУСКОМ-Агро» - одно из крупнейших сельскохозяйственных предприятий Омской области.
                        Деятельность
                        компании охватывает три сектора: растениеводство, животноводство (свиноводство и крупнорогатый
                        скот)
                        и кормопроизводство. Кроме этого есть огромный парк автомобильной, специальной и тракторной
                        техники.
                    </p>
                    <p class="about__text-paragraph">
                        В настоящее время предприятия развивается и расширяется. На территории Кормиловского района
                        совместно с ООО «РУСКОМ-Агро» развиваются компании холдинга: ООО «Сосновское», ООО «Вега –
                        Агро».
                        Общая численность работников предприятия более 1100 человек.
                    </p>
                    <p class="about__text-paragraph">
                        Наша цель – быть успешными предприятиями, сочетающими в себе инновационные технологии, высокое
                        качество продукции, слаженную команду, нацеленную на результат и заботу о своих сотрудниках.
                        Достижение данной цели возможно только благодаря профессиональной команде. Именно поэтому
                        компания
                        уделяет большое внимание подготовке, повышению квалификации и внутреннему обучению своих
                        сотрудников.
                    </p>
                    <p class="about__text-paragraph">«Успех предприятия обеспечивают люди, которые полностью отдаются
                        работе»</p>
                    <div class="about__subscribe element-animation">
                        <h3 class="about__subscribe-title subtitle">
                            Мы в ВКонтакте
                        </h3>
                        <p class="about__subscribe-description">
                            Подпишись, чтобы быть в курсе последних новостей
                        </p>

                        <a class="about__subscribe-link" href="#">
                            Подписаться →
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="directions" id="directions">
            <div class="directions__container container">
                <h2 class="directions__title title element-animation">
                    Сферы деятельности
                </h2>
                <div class="directions__content element-animation">
                    <div class="directions__item">
                        <picture>
                            <source srcset="img/directions1.webp" type="image/webp"><img class="directions__bg" src="img/directions1.jpg" alt="Свиноводство">
                        </picture>
                        <h3 class="directions__item-title">Свиноводство </h3>
                        <div class="directions__decription">
                            <h3 class="directions__decription-title">Свиноводство </h3>
                            <p class="directions__item-paragraph">Свиноводческий комплекс «РУСКОМ» рассчитан на 110 000
                                голов. Благодаря отборному генофонду и прогрессивным технологиям успешно выращивают
                                элитных животных. Животные обладают выдающимся генетическим потенциалом: одна свиноматка
                                может дать до 36 поросят в год.</p>
                            <p class="directions__item-paragraph">Строжайший ветеринарно-санитарный режим на предприятии
                                служит гарантией сохранения идеального статуса здоровья поголовья на протяжении многих
                                лет.</p>
                        </div>
                    </div>
                    <div class="directions__item">
                        <picture>
                            <source srcset="img/directions2.webp" type="image/webp"><img class="directions__bg" src="img/directions2.jpg" alt="Крупнорогатый скот">
                        </picture>
                        <h3 class="directions__item-title">Крупнорогатый скот</h3>
                        <div class="directions__decription">
                            <h3 class="directions__decription-title">Крупнорогатый скот</h3>
                            <p class="directions__item-paragraph">Комплекс крупного рогатого скота «РУСКОМ» рассчитан на
                                60 000 голов. Благодаря отборному генофонду и прогрессивным технологиям успешно
                                выращивают элитных животных.
                                Животные обладают выдающимся генетическим потенциалом.</p>
                            <p class="directions__item-paragraph">Строжайший ветеринарно-санитарный режим на предприятии
                                служит гарантией сохранения идеального статуса здоровья поголовья на протяжении многих
                                лет.</p>
                        </div>
                    </div>
                    <div class="directions__item">
                        <picture>
                            <source srcset="img/directions3.webp" type="image/webp"><img class="directions__bg" src="img/directions3.jpg" alt="Растениеводство и кормопроизводство">
                        </picture>
                        <h3 class="directions__item-title">Растениеводство и кормопроизводство</h3>
                        <div class="directions__decription">
                            <h3 class="directions__decription-title">Растениеводство и кормопроизводство</h3>
                            <p class="directions__item-paragraph">Общая площадь посевных площадей посевных площадей в
                                ООО «РУСКОМ-Агро» составляет 29 353 гектара. По сравнению с прошлым годом площадь
                                посевов увеличилась почти на 30%. Большая часть сельхозугодий отведена под пшеницу –
                                более 15 000 га.</p>
                            <p class="directions__item-paragraph">Ежегодно особое внимание на предприятии уделяется
                                севообороту, вводятся новые культуры. Например, в этом году начали выращивать картофель
                                и подсолнечник. В этом году были увеличены посевы гороха.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contacts" id="contacts">
            <div class="contacts__container container">
                <h2 class="contacts__title title element-animation">
                    Контактная информация
                </h2>
                <div class="contacts__content">
                    <h3 class="contacts__subtitle element-animation">
                        ООО «РУСКОМ-Агро»
                    </h3>
                    <h4 class="contacts__item-title element-animation">
                        Почтовый адрес:
                    </h4>
                    <p class="contacts__item-text element-animation">
                        646987, Россия, Омская область, Кормиловский район, д. Сосновка, ул. Школьная, д.32
                    </p>
                    <h4 class="contacts__item-title element-animation">
                        E-mail:
                    </h4>
                    <p class="contacts__item-text element-animation">
                        personal-agro@sibkolbasy.ru
                    </p>
                    <h4 class="contacts__item-title element-animation">
                        Контактные телефоны:
                    </h4>
                    <ul class="contacts__item-tex element-animationt">
                        <li class="element-animation">
                            63-74-14 – приемная
                        </li>
                        <li class="element-animation">
                            8 (913) 600-37-10
                        </li>
                        <li class="element-animation">
                            3 54-34 – отдел кадров
                        </li>
                        <li class="element-animation">
                            Ск № 1 - 8-913-965-66-07
                        </li>
                        <li class="element-animation">
                            СК № 2 - 8-913-965-65-41
                        </li>
                        <li class="element-animation">
                            СК № 3 - 8-913-965-65-86
                        </li>
                        <li class="element-animation">
                            ККЗ - 8-913-677-01-13
                        </li>
                        <li class="element-animation">
                            8 (913) 965 65 73 – диспетчерская служба (круглосуточно)
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php
    include "footer.php"
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/script.js"></script>
</body>

</html>