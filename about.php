<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       include "modules/head.php";
       include "php/connection.php";
    ?>
    <title>О студии</title>
</head>
<body>
    <div class="wrapper">
        <?php
            include "modules/header.php";
        ?>
        <div class="about__company banner">
            <div class="_container">
                <div class="about__company__title title">О студии</div>
            </div>
        </div>
        <div class="founders">
            <div class="_container">
                <div class="title">Основатели студии 3DOM</div>
                    <div class="founders__block">
                        <img class="founders_img" src="img/about/team/founders.jpg" alt="Основатели студии">
                        <h3>Маркова Кристина и Хренникова Екатерина. Основатели студии 3DOM! Выполняют полный цикл ведения проекта. Первая встреча, ведение проекта, генерирование идей, общение с заказчиком, авторский надзор, комплектация проекта и просто общение с профессионалами своего дела</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="question">
            <div class="question__container _container">
                <div class="question__title title">Дизайн студия 3DOM</div>
                <div class="question__text">Выполняем заказы по всей России.<br>
                    На связи 24/7<br>

                    Предложим подходящий пакет услуг под любой бюджет.<br>
                    ◾️ На рынке дизайна 5 лет, более 200 реализованных проектов. Разрабатываем проект в короткие сроки.<br>

                    ◾️ Дизайн проект подстраивается под рамки ВАШЕГО БЮДЖЕТА.<br>

                    ◾️ Детальный альбом чертежей и спецификации, облегчаем стройку и исключаем ошибки рабочих.<br>

                    ◾️ Контакт и СОПРОВОЖДЕНИЕ СТРОЙКИ дизайнером 24/7.<br>

                    ◾️ В проекте реальные материалы, сантехника и мебель, подбираются вживую с дизайнером в магазинах.<br>

                    ◾️ Помогаем экономить ваш бюджет, заказчик получает скидки от поставщиков</div>
                <div class="question__text">Уделяем внимание контролю над выполнением работ по ремонту и подбору материалов, так как клиентам нужен готовый интерьер, а нам четкое соблюдение сроков и соответствие дизайн-проекту. Главная гордость дизайн студии <span>3DOM</span> – довольные заказчики и портфолио!</div>
            </div>
        </div>

        <div class="team">
            <div class="team__container _container">
                <div class="question__title title">Наша команда</div>
                <div class="question__text">Хотим познакомить вас с нашей командой ведь именно с этими людьми Вы будите контактировать на протяжнее нескольких месяцев, пока длиться дизайн проект.</div>
                <div class="team__body">
                    <div class="team__column">
                        <div class="team__item">
                            <img src="img/about/team/4.png" alt="" class="team__img">
                            <h2>Чикова Татьяна, ведущий ландшафтный дизайнер</h2>
                            <h4>ведущий ландшафтный дизайнер нашей команды Выполняет полный цикл ведения проекта. Татьяна занимается художественным оформлением парков, садов и приусадебных участков.</h4>
                        </div>
                    </div>  
                    <div class="team__column">
                        <div class="team__item">
                            <img src="img/about/team/2.png" alt="" class="team__img">
                            <h2>Виолетта, визуализатор</h2>
                            <h4>Наш юный ЗД Визуализатор. Талантливая и целеустремленная девушка. Создает трехмерную компьютерную визуализацию интерьера жилого, общественного, коммерческого или иного внутреннего пространства.</h4>
                        </div>
                    </div>
                    <div class="team__column">
                        <div class="team__item">
                            <img src="img/about/team/3.png" alt="" class="team__img">
                            <h2>Сульженко Ольга, дизайнер</h2>
                            <h4>Занимается разработкой 3д визуализаций и альбома чертежей на стройку. Вместе с ведущими дизайнерами, создаёт незабываемый проект для Вас</h4>
                        </div>
                    </div>
                    <div class="team__column">
                        <div class="team__item">
                            <img src="img/about/team/1.png" alt="" class="team__img">
                            <h2>Гапонова Ольга, чертежник</h2>
                            <h4>Наша помощница, по эскизам и визуализациям дизайнеров, разрабатывает альбом чертежей для реализации проекта.</h4>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
        <!-- <div class="feedback">
            <div class="feedback__container _container">
                <div class="title">Возникли вопросы?<br>Мы свяжемся с вами в течении 10 минут.</div>
                <div class="feedback__block">
                    <input class="input" type="text" name="text" placeholder=Имя id="">
                    <input class="input" type="tel" name="tel" placeholder="Телефон" id="">
                    <input class="input" type="email" name="email" placeholder="Email" id="">
                    <div class="feedback__button__block"><a href="" class="feedback__button">Отправить</a></div>
                </div>
            </div>
        </div> -->
        <?php
            include "modules/footer.php";
        ?>
    </div>
    <!-- Подключаем jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Подключаем слайдер Slick -->
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>