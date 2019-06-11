<?require(ROOT. '/views/inner/header.php'); ?>
<?include "components/add_shape.php";?>
<div class="detail_shape">
    <h1>Добавить резюме</h1>
    <div class="shape">
        <div class="right">
            <form method="post" class="box">
                <div class="box_title">
                    Название
                    <input type="text" name="name_resume"  value="">
                </div>
                <div class="box_title">
                    Профф. область
                    <input type="text" name="area"  value="">
                </div>
                <div class="box_title">
                    О себе
                    <textarea name="about_me" ></textarea>
                </div>
                <div class="box_title">
                    Ключевые навыки
                    <input type="text" name="key_skills" value="">
                </div>
                <div class="box_title">
                    Владение языками
                    <input type="text" name="language"  value="">
                </div>
                <div class="box_title" style="float: right">
                    <input type="submit" name="save" value="Добавить резюме">
                </div>
            </form>
        </div>
    </div>

</div>
<?require(ROOT. '/views/inner/footer.php');?>
