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
    <title>Авторизация</title>
</head>
<body>
    <div class="wrapper">
        <?php
            include "modules/header.php";
        ?>
        <main class="page">
        <section class="main main-user">
          <div class="_container">
            <h3 class="regist_title">Авторизация:</h3>
              <form action="" class="registr__form" method = "POST">
                  <input type="text" value = "<?php echo !empty($_POST['loginAuth']) ? $_POST['loginAuth'] : '';  ?>" name = "loginAuth" placeholder="Введите логин" class="registr__inp">
                  <input type="password" name = "passAuth" placeholder="Введите пароль" class="registr__inp">
                  <button type="submit" name = "authButton" class="registr__btn">Войти</button>
                  <div class="registr__text">
                      Ещё не зарегистрированы? <a href="registr.php">Регистрация</a>
                  </div>
              </form>
              <?php
              include "php/authUsers.php";
              ?>
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