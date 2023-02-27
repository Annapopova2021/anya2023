<?php
if (isset($_POST['deleteReq'])) {
    if($_POST['statusSave']==1){
        $queryDelete = "DELETE FROM `request` WHERE `id` = '".$_POST['idSave']."'";
        $queryDeleteDB = mysqli_query($server, $queryDelete) or die ("Ошибка в запросе: ". mysqli_error($server));
    }
}

$query = "SELECT `id`, `img`, `category`, `name`, `tel`, `textarea`, `status`, `author`, `date` 
            FROM `request` 
            WHERE `author` = '".$_SESSION['dataUserId']."' ORDER BY date DESC";
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
                <?=$row['textarea']?>
            </div>
            <div class="all__lorem">
                <?=$row['tel']?>
            </div>
            <div class="all__image">
                <?php
                    echo $row['img'];
                ?>
                <img src="img/<?=$row['img']?>" alt="" />
            </div>
            <div class="all__top">
                <div class="all__name">
                    <?php
                        $query1="SELECT `category` FROM `categories` WHERE `id`=".$row['category'];
                        $queryDB1 = mysqli_query($server, $query1);
                        if (!$queryDB1) die ("Сбой при доступе к БД: " . mysqli_error($server));
                         while ($rowC = mysqli_fetch_array($queryDB1, MYSQLI_ASSOC)){
                             echo $rowC['category'];
                         }
                    ?>
                </div>
                <div class="all__status">
                    <?php
                    $query3="SELECT `status` FROM `statuses` WHERE `id`=".$row['status'];
                    $queryDB3 = mysqli_query($server, $query3);
                    if (!$queryDB3) die ("Сбой при доступе к БД: " . mysqli_error($server));
                     while ($rowC1 = mysqli_fetch_array($queryDB3, MYSQLI_ASSOC)){
                         echo $rowC1['status'];
                     }
                    ?>
                </div>
            </div>
            <form action="" method="post">
                <input type="hidden" name="statusSave" value="<?=$row['status']?>">
                <input type="hidden" name="idSave" value="<?=$row['id']?>">
                <button  name = "deleteReq"  class="all__button">
                    Удалить заявку
                </button>
            </form>

        </div>
        <?php
    }
} else {
    echo "<p style = 'color: white; text-align: center; font-weight: 700; font-size: 30px'>Заявок не обнаружено :(</p>";
}

