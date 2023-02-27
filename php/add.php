<?php
//при нажатии на кнопку проверяются поля на корректность
if (isset($_POST['reqBtn'])) {
    if (!empty($_POST['reqName']) && !empty($_POST['reqTel']) && !empty($_POST['reqTextarea']) && !empty($_POST['reqCategory']))  {
        $categoryReq = $_POST['reqCategory'];
        $nameReq = $_POST['reqName'];
        $telReq = $_POST['reqTel'];
        $textareaReq = $_POST['reqTextarea'];
        if (!empty($_FILES['path']['size'])) {
            $typesImg = array('image/png', 'image/jpeg', 'image/jpg', 'image/bmp');
            if (in_array($_FILES['path']['type'], $typesImg)) {
                $filePath = "img/".$_FILES['path']['name'];
                move_uploaded_file($_FILES['path']['tmp_name'], $filePath);
    
                $imgReq = $_FILES['path']['name'];
                $date = date('Y-m-d');
    
                $query = "insert into `request`(`img`, `category`, `name`, `tel`, `textarea`, `status`, `author`, `date`) 
                values ('$imgReq', '$categoryReq', '$nameReq', '$telReq','$textareaReq', '1', '".$_SESSION['dataUserId']."', '$date')";
                $addReq = mysqli_query($server, $query) or die ("Ошибка в запросе:" . mysqli_error($server));
    
                echo "<p class = 'success-up'>Заявка успешно оставлена</p>";
            }else {
                echo "<p class = 'collapse-up'>Недопустимый тип файла. Допустимо загружать только изображения: *.png, *.jpg *.jpeg *.bmp</p>";
            }
        }else {
            echo "<p class = 'collapse-up'>Файл не выбран</p>";
        }
    }else {
        echo "<p class = 'collapse-up'>Заполните все поля</p>";
    }
}

