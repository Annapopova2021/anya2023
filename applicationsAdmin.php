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
               Заявки пользователей:
            </strong>
          </div>
        </section>
        <section class="all">
          <div class="all__container _container">
            <div class="all__row">
                <?php
                include "php/requestsAdmin.php";
                ?>
            </div>
              <div class="all__new-category new-category">
                  <form action="" method="post" class="new-category__form">
                      <div class="new-category__title">Добавление новой категории:</div>
                    <div class="new-category__over-inp">Напишите название новой категории:</div>
                      <input type="text" name="newCategoryName" placeholder="Название категории" class="new-category__inp">
                      <button name = "AddNewCategoryAdmin" class="new-category__btn">Добавить категорию</button>
                      <?php
                      include 'php/addNewCategoryAdm.php';
                      ?>
                  </form>
                  <form action="" method="post" class="new-category__form">
                      <div class="new-category__title">Удаление категории:</div>
                      <?php
                      include 'php/deleteCategoryAdm.php';
                      ?>
                      <button name = "DeleteNewCategoryAdmin" class="new-category__btn">Удалить</button>
                  </form>
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