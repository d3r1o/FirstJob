<?require(ROOT. '/views/inner/header.php'); ?>
<?include "components/profile_student.php";?>
<div class="detail_shape">
    <div class="user_photo">
        <img src="/img/user.jpg">
    </div>
    <div class="shape">
        <div class="left">
            <span>Фамилия</span>
            <span>Имя</span>
            <span>Город проживания</span>
            <span>Гражданство</span>
            <span>Телефон</span>
            <span>Учебное заведение</span>
            <span>Специальность</span>
            <span>Форма обучения</span>
            <span>Курс</span>
            <span>Дата выпуска</span>
        </div>
        <div class="right">
            <form method="post" class="box">
                <input type="text" name="surname" placeholder="Фамилия" value="<?=$profile['surname']?>">
                <input type="text" name="user_name" placeholder="Имя" value="<?=$profile['name']?>">
                <input type="text" name="abode" placeholder="Город проживания" value="<?=$profile['abode']?>">
                <input type="text" name="nationality" placeholder="Гражданство" value="<?=$profile['nationality']?>">
                <input type="text" name="mobile_phone" placeholder="Телефон" value="<?=$profile['mobile_phone']?>">

                <input type="text" name="" placeholder="Учебное заведение" value="<?=$profile['education']['institution']?>">
                <input type="text" name="" placeholder="Специальность" value="<?=$profile['education']['specialty']?>">
                <input type="text" name="" placeholder="Форма обучения" value="<?=$profile['education']['study_form']?>">
                <input type="text" name="" placeholder="Курс" value="<?=$profile['education']['course']?> курс">
                <input type="text" name="" placeholder="Дата выпуска" value="<?=$profile['education']['issue_year']?>">
                <input type="submit" name="save" value="Сохранить изменения">
            </form>
        </div>
    </div>
</div>

<?require(ROOT. '/views/inner/footer.php');?>
