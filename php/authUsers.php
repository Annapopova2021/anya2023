<?php
 //проверка нажатия на кнопку, проверка корректности заполненных полей
 if (isset($_POST['authButton'])) {
   if (!empty($_POST['loginAuth']) && !empty($_POST['passAuth'])) {
       $loginAuth = $_POST['loginAuth'];
       $passAuth = $_POST['passAuth'];
       $query = "SELECT * FROM `users` WHERE `login` = '".$loginAuth."'";
       $auth = mysqli_query($server, $query);

       if (mysqli_num_rows($auth) != 0) {
           while($row = mysqli_fetch_array($auth, MYSQLI_ASSOC)) {
               if (password_verify($passAuth, $row['password'])) {
                //проверка роли   
                if ($row['role'] == '2') {
                       $_SESSION['dataUserId'] = $row['id'];
                       $_SESSION['dataUserFIO'] = $row['FIO'];
                       $_SESSION['dataUserLogin'] = $row['login'];
                       $_SESSION['dataUserRole'] = $row['role'];
                       header('Location: afterRegistr.php');

                   }elseif ($row['role'] == '1') {
                       $_SESSION['dataUserId'] = $row['id'];
                       $_SESSION['dataUserFIO'] = $row['FIO'];
                       $_SESSION['dataUserLogin'] = $row['login'];
                       $_SESSION['dataUserRole'] = $row['role'];
                       header('Location: applicationsAdmin.php');
                   }
               }else {
                   header('Location: auth.php');
               }
           }
       } else {
           echo "<p class = 'collapse'>Данные неверны</p>";
       }
   } else {
       echo "<p class = 'collapse'>Заполните все поля!</p>";
   }
}

