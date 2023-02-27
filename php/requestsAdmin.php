<?php

if (isset($_POST['deleteReq'])) {

    $queryDelete = "DELETE FROM `request` WHERE `id` = '".$_POST['idSave']."'";
    $queryDeleteDB = mysqli_query($server, $queryDelete) or die ("Ошибка в запросе: ". mysqli_error($server));
}

if (isset($_POST['editCateg'])) {
    $queryEdit = "UPDATE `request` SET `category` = '".$_POST['reqCategory']."' WHERE `id` = '".$_POST['idSave']."'";
    $queryDB2 = mysqli_query($server, $queryEdit);
 }
 if (isset($_POST['editStatus'])) {
    $queryEditStatus = "UPDATE `request` SET `status` = '".$_POST['reqCategoryStatus']."' WHERE `id` = '".$_POST['idSave']."'";
    $queryDB2 = mysqli_query($server, $queryEditStatus);
 }
$query = "SELECT `id`, `img`, `category`, `name`, `tel`, `textarea`, `status`, `author`, `date` 
            FROM `request` ORDER BY date DESC";
$queryDB = mysqli_query($server, $query);
if (!$queryDB) die ("Сбой при доступе к БД: " . mysqli_error($server));
if (mysqli_num_rows($queryDB) > 0) {
    while ($row = mysqli_fetch_array($queryDB, MYSQLI_ASSOC)) {
        ?>
        <div class="all__item">
            <div class="all__top">
                <div class="all__name"><?=$row['name']?></div>
                <div class="all__date"><?=$row['date']?></div>
            </div>
            <div class="all__lorem">
                <?=$row['tel']?>
            </div>
            <div class="all__lorem">
                <?=$row['textarea']?>
            </div>
            <div class="all__image">
                <?php
                echo $row['img'];
                ?>
                <img src="img/<?=$row['img']?>" alt="" />
            </div>
            <div class="all__top">
                
            </div>
            <form action="" method="post">
                <button name = "deleteReq"  class="all__button">
                    Удалить заявку
                </button>
                <div class="all__name">
                    <?php
                    $query1="SELECT `category` FROM `categories` WHERE `id`=".$row['category'];
                    $queryDB1 = mysqli_query($server, $query1);
                    if (!$queryDB1) die ("Сбой при доступе к БД: " . mysqli_error($server));
                    while ($rowC = mysqli_fetch_array($queryDB1, MYSQLI_ASSOC)){
                        $query="SELECT `id`, `category` FROM `categories`";
                        $addCat = mysqli_query($server, $query) or die ("Ошибка в запросе:" . mysqli_error($server));
                        ?>
                        <select class="request__input reqInp" id=""  name="reqCategory">
                        <?php
                        while ($row2 = mysqli_fetch_array($addCat, MYSQLI_ASSOC)) {
                            if ($row2['id'] == $row['category']) {
                                echo "<option selected = 'selected' value=".$row2['id'].">".$row2['category']."</option>";  
                                
                            }else {
                                echo "<option value=".$row2['id'].">".$row2['category']."</option>";  
                            }
                        }
                        ?>
                        </select>
                        <?php
                        
                    }
                    ?>
                </div>
                <input type="hidden" name="idSave" value="<?=$row['id']?>">
                <button name = "editCateg"  class="all__button2">
                    Изменить категорию
                </button>

                <div class="all__status">
                <?php
                    $query3="SELECT `status` FROM `statuses` WHERE `id`=".$row['status'];
                    $queryDB3 = mysqli_query($server, $query3);
                    if (!$queryDB3) die ("Сбой при доступе к БД: " . mysqli_error($server));
                     while ($rowC1 = mysqli_fetch_array($queryDB3, MYSQLI_ASSOC)){
                         $queryStatus="SELECT `id`, `status` FROM `statuses`";
                         $addYes = mysqli_query($server, $queryStatus) or die ("Ошибка в запросе:" . mysqli_error($server));
                         ?>
                         <select class="request__input reqInp" id=""  name="reqCategoryStatus">
                        <?php
                        while ($row2 = mysqli_fetch_array($addYes, MYSQLI_ASSOC)) {
                            if ($row2['id'] == $row['status']) {
                                echo "<option selected = 'selected' value=".$row2['id'].">".$row2['status']."</option>";  
                                
                            }else {
                                echo "<option value=".$row2['id'].">".$row2['status']."</option>";  
                            }
                        }
                     }
                    ?>
                    </select>
                    <?php
                    ?>
                </div>
                <input type="hidden" name="idSave" value="<?=$row['id']?>">
                <button name = "editStatus"  class="all__button2">
                    Изменить статус
                </button>
            </form>
            <div class="popup">
              <div class="popup__body">
                <button class="popup__close">Закрыть</button>
                <div class="popup__title">Вы действительно хотите удалить запись?</div>
                <form method = "post" action = "" class="popup__pick">
                  <a href = "" class="popup__no">Нет</a>
                  <input type="hidden" name="idSave" value="<?=$row['id']?>">
                    <input type="hidden" name="statusSave" value="<?=$row['status']?>">
                  <button name = "deleteReqTrue" class="popup__yes">Да</button>
                </form>
              </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "<p style = 'color: #000; text-align: center; font-weight: 700; font-size: 30px'>На данный момент заявок нет!</p>";
}

