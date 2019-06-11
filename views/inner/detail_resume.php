<?require(ROOT. '/views/inner/header.php'); ?>
<?include "components/detail_resume.php";?>


<h1>Детальная Резюме</h1>

<div class="shape">
    <div class="right">
        <form method="post" class="box">
            <div class="box_title">
                Название
                <input type="text" name="name_resume"  value="<?=$resume['name_resume']?>">
            </div>
            <div class="box_title">
                Профф. область
                <input type="text" name="area"  value="<?=$resume['area']?>">
            </div>
            <div class="box_title">
                О себе
                <textarea name="about_me" value=""><?=$resume['about_me']?></textarea>
            </div>
            <div class="box_title">
                Ключевые навыки
                <input type="text" name="key_skills" value="<?=$resume['key_skills']?>">
            </div>
            <div class="box_title">
                Владение языками
                <input type="text" name="language"  value="<?=$resume['language']?>">
            </div>
            <div class="box_title" style="float: right">
                <input type="submit" name="save" value="Сохранить изменения">
            </div>
        </form>
    </div>
</div>


<?require(ROOT. '/views/inner/footer.php');?>
