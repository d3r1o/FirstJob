<?require(ROOT. '/views/inner/header.php'); ?>
<?include "components/profile_company.php";?>
<div class="detail_shape">
    <div class="user_photo">
        <img src="/img/matter.png" width="100" height="100">
        <div class="add">
            <div class="add_info">
                <a href="#">
                    <div class="regis">Мои вакансии</div>
                </a>
                <a href="#">
                    <div class="regis">Мои стажировки</div>
                </a>
                <a href="#">
                    <div class="regis">Отклики</div>
                </a>
            </div>
        </div>
    </div>


    <div class="shape">
        <div class="right">
            <form method="post" class="box">
                <div class="box_title">
                    Название организации
                    <input type="text" name="name_org"  placeholder="Название организации" value="<?=$crew['name_org'];?>">
                </div>
                <div class="box_title">
                    Деятельность организации
                    <input type="text" name="activity" placeholder="Деятельность организации" value="<?=$crew['activity'];?>">
                </div>
                <div class="box_title">
                    Город
                    <input type="text" name="city" placeholder="Город" value="<?=$crew['city'];?>">
                </div>
                <div class="box_title">
                    Имя представителя
                    <input type="text" name="name" placeholder="Имя представителя" value="<?=$crew['name'];?>">
                </div>
                <div class="box_title">
                    Фамилия представителя
                    <input type="text" name="surname" placeholder="Фамилия представителя" value="<?=$crew['surname'];?>">
                </div>
                <div class="box_title">
                    Должность
                    <input type="text" name="post" placeholder="Должность" value="<?=$crew['post'];?>">
                </div>
                <div class="box_title">
                    Телефон
                    <input type="text" name="mobile_phone" placeholder="Телефон" value="<?=$crew['mobile_phone'];?>">
                </div>
                <div class="box_title" style="float: right">
                    <input type="submit" name="save" value="Сохранить изменения">
                </div>


            </form>
        </div>
    </div>

</div>

<?require(ROOT. '/views/inner/footer.php');?>
