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
    <div class="wrapper">
        <?php
            include "modules/header.php";
        ?>
        <main class="page_two">

        <section class="main-user main__banner">
            <div class="_container">
            <strong>Добро пожаловать, 
                <?php 
                if (isset($_SESSION['dataUserFIO'])) {
                    echo $_SESSION['dataUserFIO'];
                }
                ?>!
            </strong>
            <br><div class="main__btn__block"><a href = "applications.php" class="main__btn">Мои заявки</a></div>
          </div>
        </section>

        <section class="request">
          <div class="request__container _container">
            <div class="request__title-body">
              <h2 class="request__title">
                Создайте <br/>
                <span>свою заявку:</span>
              </h2>
            </div>
              <?php
              include "php/add.php";
              ?>
            <form enctype="multipart/form-data" action="" class="request__form" method="post">
                <?php
                $query="SELECT `id`, `category` FROM `categories`";
                $addCat = mysqli_query($server, $query) or die ("Ошибка в запросе:" . mysqli_error($server));
                ?>
                <select class="request__input" id=""  name="reqCategory">
                    <?php
                    while ($row = mysqli_fetch_array($addCat, MYSQLI_ASSOC)) {
                        echo "<option value=".$row['id'].">".$row['category']."</option>";
                    }
                    ?>
                </select>

              <input
                type="text"
                placeholder="Ваше имя"
                class="request__input"
                name="reqName"
                
              />
              <input
                type="text"
                placeholder="Номер телефона"
                class="request__input"
                name="reqTel"
              />
              <textarea
                class="request__textarea"
                placeholder="Кратко опишите суть заявки"
                name="reqTextarea"
              ></textarea>
              <input type="file" name="path" class="request__file" />
              <button name="reqBtn" type="submit" class="request__btn">
                Оставить заявку
              </button>
              <div class="request__personal-data">
                Нажимая на кнопку, вы соглашаетесь с правилами <br />
                <span>обработки персональных данных</span>
              </div>
            </form>
          </div>
        </section>
      </main>
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