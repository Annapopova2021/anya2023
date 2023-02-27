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
    <title>Портфолио</title>
</head>
<body>
    <div class="wrapper">
        <?php
            include "modules/header.php";
        ?>
        <div class="about__company banner">
            <div class="_container">
                <div class="about__company__title title">Портфолио</div>
            </div>
        </div>

        <div class="portfolio">
            <div class='portfolio__container _container'>
                <nav class="portfolio__filter filter">
                    <ul class="filter__list">
                        <li data-filter="1" class="filter__item active">Все</li>
                        <li data-filter="2" class="filter__item">Квартиры</li>
                        <li data-filter="3" class="filter__item">Дома</li>
                        <li data-filter="4" class="filter__item">коммерческие объекты</li>
                    </ul>
                </nav>
                <div class="portfolio__items gallery">
                    <div class="portfolio__column f_2">
                        <a href="project_design.php" class="portfolio__item"><img src="img/home/portfolio/flat1.png" alt="" /></a>
                    </div>
                    <div class="portfolio__column f_2">
                        <a href="" class="portfolio__item"><img src="img/home/portfolio/flat2.png" alt="" /></a>
                    </div>

                    <div class="portfolio__column f_3">
                        <a href="" class="portfolio__item"><img src="img/home/portfolio/home1.png" alt="" /></a>
                    </div>
                    <div class="portfolio__column f_3">
                        <a href="" class="portfolio__item"><img src="img/home/portfolio/home2.png" alt="" /></a>
                    </div>
                    <div class="portfolio__column f_4">
                        <a href="" class="portfolio__item"><img src="img/home/portfolio/commercial1.png" alt="" /></a>
                    </div>
                    <div class="portfolio__column f_4">
                        <a href="" class="portfolio__item"><img src="img/home/portfolio/commercial2.png" alt="" /></a>
                    </div>
                    <div class="portfolio__column f_4">
                        <a href="" class="portfolio__item"><img src="img/home/portfolio/1.png" alt="" /></a>
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