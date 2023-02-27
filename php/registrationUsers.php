<?php
//проверка заполнения всех полей, проверка нажатия на кнопку
if (isset($_POST['register'])) {
   if (!empty($_POST['fioRegistr']) && !empty($_POST['loginRegistr']) && !empty($_POST['emailRegistr'] && !empty($_POST['passRegistr']))
    && !empty($_POST['passTrueRegistr'])) {
     if (preg_match("/^([а-яА-ЯЁёІіЇїҐґЄє' -]{1,50})$/u", $_POST['fioRegistr'])) {
       if (preg_match("/^([a-zA-Z' -]{1,50})$/u", $_POST['loginRegistr'])) {
         if ($_POST['passRegistr'] == $_POST['passTrueRegistr']) {
           if (isset($_POST['checkboxData']) != '') {
               $fioRegistr = $_POST['fioRegistr'];
               $loginRegistr = $_POST['loginRegistr'];
               $emailRegistr = $_POST['emailRegistr'];
               $passRegistr = $_POST['passRegistr'];

               $checkLoginQuery = "SELECT `login` FROM `users` WHERE `login`='".$loginRegistr."'";
               $checkLogin = mysqli_query($server, $checkLoginQuery);
               if (!$checkLogin) die ("Сбой при доступе к базе данных:" . mysqli_error($server)); //обработка ошибок в соединении и запросах к бд 
               //разграничение роли для пользователя "0"
               if (mysqli_num_rows($checkLogin) == 0) {
                $passRegistr = password_hash($passRegistr, PASSWORD_BCRYPT);
                   $query = "INSERT INTO `users`( `FIO`, `login`, `email`, `password`, `role`) 
                             VALUES ('$fioRegistr','$loginRegistr','$emailRegistr','$passRegistr','2')";
                   $queryResult = mysqli_query($server, $query) or die ("Ошибка в запросе:" . mysqli_error($server));

                   echo "<p class = 'success' '>Регистрация прошла успешно</p>";
                   header('Location: auth.php');
               }else {
                   echo "<p class = 'collapse'>Данный логин уже занят, придумайте другой!</p>";
               }
           }else {
               echo "<p class = 'collapse'>Пожалуйста, согласитесь на обработку персональных данных!</p>";
           }
         }else {
           echo "<p class = 'collapse'>Пароли не совпадают!</p>";
         }
       }else {
         echo "<p class = 'collapse'>В логине можно использовать только латиницу!</p>";
       }
     }else {
       echo "<p class = 'collapse'>Дефис и пробелы в ФИО использовать нельзя!</p>";
     }
   } else {
       echo "<p class = 'collapse'>Заполните все поля!</p>";
   } 
 }
