<?php
    if (isset($_POST['DeleteNewCategoryAdmin'])) {
        $queryDeleteCategory =" DELETE FROM `categories` WHERE `id` = '".$_POST['reqCategoryStatusDel']."'";
        $queryDeleteCategoryDb = mysqli_query($server, $queryDeleteCategory) or die ("Ошибка в запросе" . mysqli_error($server));
        echo "<p style='margin-top: 20px' class = 'success-up'>Категория успешно удалена</p>";
    }
    $query3="SELECT `id`,`category` FROM `categories`";
    $addYes = mysqli_query($server, $query3) or die ("Ошибка в запросе:" . mysqli_error($server));
?>
<select class="request__input reqInp" id=""  name="reqCategoryStatusDel">
<?php
    while ($row = mysqli_fetch_array($addYes, MYSQLI_ASSOC)) {
        echo "<option value=".$row['id'].">".$row['category']."</option>";
    }
?>
</select>

