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
    <title>Регистрация</title>
</head>
<body>

        <?php
            include "modules/header.php";
        ?>
        <main class="page_two">

        <section class="main-user main__banner">
            <div class="_container">
            <strong>
                Ваши заявки:
            </strong>
          </div>
        </section>
        <section class="all">
          <div class="all__container _container">
            <div class="all__title-body">
              <a href="afterRegistr.php" class="all__right-appl">Вернуться к созданию заявки</a>
            </div>
            <div class="all__row">
                <?php
                  include "php/requests.php";
                ?>
            </div>
          </div>
        </section>
        <?php
            include "modules/footer.php";
        ?>


     <!-- Подключаем jQuery -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <!-- Подключаем слайдер Slick -->
     <script src="js/slick.min.js"></script>
     <script src="js/script.js"></script>
</body>
</html>