<?require(ROOT. '/views/inner/header.php'); ?>
<?include "components/profile_student.php";?>

<div class="detail_shape">
    <div class="user_photo">
        <img src="/img/user.jpg">
        <div class="add">
            <div class="add_info">
                <a href="detail_resume?id=<?=$user['id'];?>">
                    <div class="regis">Мои резюме</div>
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
                    Фамилия
                    <input type="text" name="surname" placeholder="Фамилия" value="<?=$profile['surname']?>">
                </div>
                <div class="box_title">
                    Имя
                    <input type="text" name="name" placeholder="Имя" value="<?=$profile['name']?>">
                </div>
                <div class="box_title">
                    День рождения
                    <input type="text" name="birthday" placeholder="День рождения" value="<?=$profile['birthday']?>">
                </div>
                <div class="box_title">
                    Пол
                    <input type="text" name="sex" placeholder="Пол" value="<?=$profile['sex']?>">
                </div>
                <div class="box_title">
                    Город проживания
                    <input type="text" name="abode" placeholder="Город проживания" value="<?=$profile['abode']?>">
                </div>
                <div class="box_title">
                    Гражданство
                    <input type="text" name="nationality" placeholder="Гражданство" value="<?=$profile['nationality']?>">
                </div>
                <div class="box_title">
                    Телефон
                    <input type="text" name="mobile_phone" placeholder="Телефон" value="<?=$profile['mobile_phone']?>">
                </div>
                <div class="box_title">
                    Учебное заведение
                    <input type="text" name="institution" placeholder="Учебное заведение" value="<?=$profile['education']['institution']?>">
                </div>
                <div class="box_title">
                    Специальность
                    <input type="text" name="specialty" placeholder="Специальность" value="<?=$profile['education']['specialty']?>">
                </div>
                <div class="box_title">
                    Форма обучения
                    <input type="text" name="study_form" placeholder="Форма обучения" value="<?=$profile['education']['study_form']?>">
                </div>
                <div class="box_title">
                    Курс
                    <input type="text" name="course" placeholder="Курс" value="<?=$profile['education']['course']?> курс">
                </div>
                <div class="box_title">
                    Дата выпуска
                    <input type="text" name="issue_year" placeholder="Дата выпуска" value="<?=$profile['education']['issue_year']?>">
                </div>
                <div class="box_title" style="float: right">
                    <input type="submit" name="save" value="Сохранить изменения">
                </div>


            </form>
        </div>
    </div>
</div>

<?require(ROOT. '/views/inner/footer.php');?>
