<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
       include "modules/head.php";
       include "php/connection.php";
    ?>
    <title>3DOM - студия дизайн интерьера</title>
    <meta name="description" content="...">
</head>
<body>
    <div class="wrapper">
        <?php
            include "modules/header.php";
        ?>
        <div class="header">
            <div class="header__container _container">
                <div class="header__content _anim-items">
                    <h1 class="header__title _anim-items _anim-no-hide">Стильные дизайн - проекты</h1>
                    <h2 class="header__suptitle _anim-items _anim-no-hide">Хороший вкус, ничего лишего и каждая деталь на своем месте - то, что всегда будет в цене </h2>
                    <h2 class="header__button__anim _anim-items _anim-no-hide"><a href="portfolio.php" class="header__button">Портфолио</a></h2>
                </div>
                <a class="cl-btn scroll-to-block" data-block=".goal" href=""><div class="header__str"></div></a>
            </div>
            <div class="header__opacity"></div>
        </div>
        <div class="goal">
            <div class="goal__container _container">
                <div class="goal__text">Мы переворачиваем представление о дизайне. Создаём стильные и пропитанные индивидуальностью заказчика интерьеры.</div>
            </div>
        </div>
        <div class="services _anim-items">
            <div class="services_container _container">
                <div class="title">Основные направления</div>
                <div class="services__body">
                    <div class="services__column">
                        <div class="services__item">
                            <div class="services__img">
                                <img src="img/home/services/1.png" alt="">
                            </div>
                            <div class="services__title">Дизайн<br> жилых интерьеров</div>
                            <div class="services__text">Проектирование квартир и домов в современном стиле, из экологически чистых материалов.</div>
                        </div>
                    </div>
                    <div class="services__column">
                        <div class="services__item">
                            <div class="services__img">
                                <img src="img/home/services/2.png" alt="">
                            </div>
                            <div class="services__title">Архитектурное проектирование</div>
                            <div class="services__text">Архитектурное проектирование загородных домов для частных клиентов в современном стиле.</div>
                        </div>
                    </div>
                    <div class="services__column">
                        <div class="services__item">
                            <div class="services__img">
                                <img src="img/home/services/3.png" alt="">
                            </div>
                            <div class="services__title">Дизайн интерьеров<br> для бизнеса</div>
                            <div class="services__text">Проектирование коммерческих интерьеров, Дизайн интерьера ресторанов, баров, кафе, отелей под целевую аудиторию.</div>
                        </div>
                    </div>
                    <div class="services__column">
                        <div class="services__item">
                            <div class="services__img">
                                <img src="img/home/services/4.png" alt="">
                            </div>
                            <div class="services__title">Ремонт в квартирах и домах под ключ</div>
                            <div class="services__text">Работы выполняются специалистами в точном соответствии с проектом, а также действующими стандартами и новейшими технологиями.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about__title title">О студии</div>
        <div class="about">
            <div class="about__container _container">
                <div class="about__text"><span>СТУДИЯ 3DOM</span>  —  это креативная команда дипломированных профессионалов, способная ответственно, технологично и творчески решать сложные задачи и учитывать мельчайшие детали каждого проекта любой сложности.
                    Проектируя для конкретных людей, мы материализуем их собственное видение идеального пространства, их мечты и желания, создавая современные и уютные интерьеры.</div>
            </div>
        </div>
        <div class="design">
            <div class="design__container _container">
                <h2 class="title">Проектируем и воплощаем</h2>
                <div class="design__img">
                    <img class="img1" src="img/home/design/1.jpg" alt="">
                    <img class="img2" src="img/home/design/2.jpg" alt="">
                </div>
            </div>
        </div>
    
        <div class="reviews">
            <div class="title">Отзывы</div>
            <div class="reviews__block">
                <div class="reviews__container _container">  
                    <div class="slider">
                        <div class="slider__item filter">
                            <div class="reviews__img">
                                <img src="img/home/reviews/one_people.png" alt="Виктор Штейников">
                            </div>
                            <div class="reviews__title">Виктор Штейников</div>
                            <div class="reviews__text">Большое спасибо за качественно проделанную работу, все выполнено в сроки. Были на связи 24/7, предлагали интересные идеи. Результатом очень доволен, всем советую! </div>
                        </div>
                        <div class="slider__item">
                            <div class="reviews__img">
                                <img src="img/home/reviews/one_people.png" alt="Луиза Исаева">
                            </div>
                            <div class="reviews__title">Сергей Пастухов</div>
                            <div class="reviews__text">Спасибо за классный интерьер. Все на высшем уровне, по цене соорентирвали в самом начале, помогли с заказом мебели, получили хорошую скидку. </div>
                        </div>
                        <div class="slider__item filter">
                            <div class="reviews__img">
                                <img src="img/home/reviews/one_people.png" alt="Дарья Романова">
                            </div>
                            <div class="reviews__title">Евгений Романов</div>
                            <div class="reviews__text">Хочу выразить огромную благодарость всейц команде "3DOM". За месяц разработали классный дизайн. Учитывали все пожелания и оперативно корректировали и вносили опправки. Спасибо, что осуществили мою мечту.</div>
                        </div>
                        <div class="slider__item filter">
                            <div class="reviews__img">
                                <img src="img/home/reviews/one_people.png" alt="">
                            </div>
                            <div class="reviews__title">Алексей Пастухов</div>
                            <div class="reviews__text">Давно мечтали о собственном доме, поэтому тщательно выбирали подрядчика. Ни разу не пожалели, что обратились в эту строительную компанию, так как получили современный, теплый, очень красивый дом.</div>
                        </div>
                        <div class="slider__item filter">
                            <div class="reviews__img">
                                <img src="img/home/reviews/one_people.png" alt="">
                            </div>
                            <div class="reviews__title">Михаил Литвин</div>
                            <div class="reviews__text">Мы выбирали типовой проект, однако в этой строительной компании учли все наши индивидуальные пожелания и быстро внесли изменения. Специалисты грамотно консультировали нас на всех этапах строительства, а также дали ценные советы и оказали помощь в обустройстве забора и бани.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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