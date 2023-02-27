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
    <title>Услуги</title>
</head>
<body>
    <div class="wrapper">
        <?php
            include "modules/header.php";
        ?>
        <div class="about__company banner">
            <div class="_container">
                <div class="about__company__title title">Услуги & Цены</div>
            </div>
        </div>
        <div class="designServices">
            <div class="container__two">
                <div class="designServices__title">Услуги & Цены</div>
                <div class="designServices__text">Ниже представлены примерные цены на пакеты услуг по дизайну интерьера.</div>

                <div class="designServices__package">Пакеты услуг</div>
                <div class="designServices__body">
                    <div class="designServices__column">
                        <div class="designServices__item">
                            <div class="designServices__item__block item__block">
                                <div class="item__block__suptitle">Визуализации</div>
                                <div class="item__block__price">1200 ₽</div>
                                <div class="item__block__m2">за 1 м2</div>
                            </div>
                            <div class="designServices__block__img"><img src="img/service/1.png" alt="Визуализации"></div>
                        </div>
                    </div>
                    <div class="designServices__column">
                        <div class="designServices__item">
                            <div class="designServices__item__block">
                                <div class="item__block__suptitle">Альбом чертежей</div>
                                <div class="item__block__price">1200 ₽</div>
                                <div class="item__block__m2">за 1 м2</div>
                            </div>
                            <div class="designServices__block__img"><img src="img/service/2.png" alt="альбом чертежей"></div>
                        </div>
                    </div>
                    <div class="designServices__column">
                        <div class="designServices__item">
                            <div class="designServices__item__block item__block item__block__two">
                                <div class="item__block__suptitle">Полный дизайн проект</div>
                                <div class="item__block__price">2400 ₽</div>
                                <div class="item__block__m2">за 1 м2</div>
                            </div>
                            <div class="designServices__block__img"><img src="img/service/3.png" alt="дизайн проект"></div>
                        </div>
                    </div>
                    <div class="designServices__column">
                        <div class="designServices__item">
                            <div class="designServices__item__block item__block">
                                <div class="item__block__suptitle">Дизайн с авторским надзором</div>
                                <div class="item__block__price">6000 ₽</div>
                                <div class="item__block__m2">за 1 м2</div>
                            </div>
                        </div>
                        <div class="designServices__block__img"><img src="img/service/4.png" alt="дизайн проект"></div>
                    </div>
                </div>
                <h2 class="designServices__priceSity">* Цены действительны на территории РФ.</h2>
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