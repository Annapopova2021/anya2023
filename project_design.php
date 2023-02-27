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
    <title>ЖК Луч</title>
</head>
<body>
    <div class="wrapper">
        <?php
            include "modules/header.php";
        ?>
        <div class="projectDesign">
            <div class="container__two">
                <div class="projectDesign__block">
                    <div class="projectDesign__block__left">
                        <div class="projectDesign__year"><span>Год</span><br>2022</div>
                        <div class="projectDesign__m"><span>Площадь</span><br>80 м2</div>
                        <div class="projectDesign__location"><span>Локация</span><br>Ростов-на-Дону</div>
                    </div>
                    <div class="projectDesign__block__right">
                        <div class="projectDesign__title">Дизайн-проект дома в<br>современном стиле</div>
                        <div class="projectDesign__text">Интерьер выполнен в современном стиле на основе приема контраста, что придает дому  большей насыщенности и динамичности.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="designServices__gallery gallery">
            <div class="container__two">
                <div class="gallery__block block">
                    <div class="block__img">
                        <img src="img/portfolio/jk1/1.jpg" alt="интерьер">
                    </div>
                    <div class="block__two__img">
                        <div class="block__img">
                            <img src="img/portfolio/jk1/4.jpg" alt="интерьер">
                        </div>
                        <div class="block__img">
                            <img src="img/portfolio/jk1/3.jpg" alt="интерьер">
                        </div>
                    </div>
                    <div class="block__two__img">
                        <div class="block__img">
                            <img src="img/portfolio/jk1/6.jpeg" alt="интерьер">
                        </div>
                        <div class="block__img">
                            <img src="img/portfolio/jk1/5.jpeg" alt="интерьер">
                        </div>
                    </div>
                    <div class="block__two__img">
                        <div class="block__img">
                            <img src="img/portfolio/jk1/2.jpg" alt="интерьер">
                        </div>
                        <div class="block__img">
                            <img src="img/portfolio/jk1/7.jpeg" alt="интерьер">
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