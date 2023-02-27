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
        <main class="page">
        <section class="main main-user">
          <div class="_container">
          <h3 class="regist_title">Регистрация:</h3>
              <form method = "post" action="" class="registr__form">
                  <input type="text" value = "<?php echo !empty($_POST['fioRegistr']) ? $_POST['fioRegistr'] : '';  ?>" name = "fioRegistr" placeholder="Введите ваше ФИО" class="registr__inp">
                  <input type="text" value = "<?php echo !empty($_POST['loginRegistr']) ? $_POST['loginRegistr'] : '';  ?>" name = "loginRegistr" placeholder="Введите ваш логин" class="registr__inp">
                  <input type="email" value = "<?php echo !empty($_POST['emailRegistr']) ? $_POST['emailRegistr'] : '';  ?>" name = "emailRegistr" placeholder="Введите вашу почту" class="registr__inp">
                  <input type="password" value = "<?php echo !empty($_POST['passRegistr']) ? $_POST['passRegistr'] : '';  ?>"  name = "passRegistr" placeholder="Введите ваш пароль" class="registr__inp">
                  <input type="password" value = "<?php echo !empty($_POST['passTrueRegistr']) ? $_POST['passTrueRegistr'] : '';  ?>" name = "passTrueRegistr" placeholder="Подтвердите ваш пароль" class="registr__inp">
                  <label for="registr__check">
                      Согласие на обработку персональных данных
                      <input name = "checkboxData" type="checkbox"  class="registr__check">
                  </label>
                  <button type="submit" class="registr__btn btn-reg" name = "register">Зарегистрироваться</button>
                  <div class="register__back">
                      Уже имеется аккаунт? <a href="auth.php">Войти</a>
                  </div>
              </form>
              <?php
              include "php/registrationUsers.php";
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