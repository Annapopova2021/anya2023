<?php
if (isset($_POST['AddNewCategoryAdmin'])) {
    if (!empty($_POST['newCategoryName'])) {
        $newCategoryName = $_POST['newCategoryName'];

        $checkCategoryQuery = "SELECT `category` from `categories` where `category` = '".$newCategoryName."'";
        $checkCategory = mysqli_query($server, $checkCategoryQuery);
        if (!$checkCategory) die ("Сбой при доступе к базе данных:" . mysqli_error($server));
        if (mysqli_num_rows($checkCategory) == 0) {
            $queryNewCategory = "INSERT INTO `categories` (`category`) values ('$newCategoryName')";
            $queryNewCategoryDb = mysqli_query($server, $queryNewCategory)  or die ("Ошибка в запросе " . mysqli_error($server));
            echo "<p style='margin-top: 20px' class = 'success-up'>Категория успешно добавлена!</p>";

        }else {
            echo "<p class = 'collapse'>Данная категория уже существует!</p>";
        }
    }else {
        echo "<p class = 'collapse'>Пожалуйста, заполните поле!</p>";

    }
}