<?require(ROOT. '/views/inner/header.php'); ?>
<?include "components/post_vacancy.php";?>
<div class="detail_shape">
    <h1>Добавить Вакансию</h1>
    <div class="shape">
        <div class="right">
            <form method="post" class="detail_resume">
                <div class="box_title">
                    Название
                    <input type="text" name="name"  value="">
                </div>
                <div class="box_title">
                    Специализация
                    <input type="text" name="specialization"  value="">
                </div>
                <div class="box_title">
                    Описание
                    <textarea name="description" ></textarea>
                </div>
                <div class="box_title">
                    Ключевые навыки
                    <input type="text" name="key_skills" value="">
                </div>
                <div class="box_title">
                    Зарплата
                    <input type="text" name="income_level"  value="">
                </div>
                <div class="box_title">
                    Тип занятости
                    <input type="text" name="type_employment"  value="">
                </div>
                <div class="box_title">
                    График работы
                    <input type="text" name="schedule"  value="">
                </div>
                <div class="box_title">
                    Город
                    <input type="text" name="city"  value="">
                </div>
                <div class="box_title">
                    Адрес
                    <input type="text" name="address"  value="">
                </div>

                <div class="box_title" style="float: right">
                    <input type="submit" name="save" value="Сохранить изменения">
                </div>
            </form>
        </div>
    </div>

</div>
<?require(ROOT. '/views/inner/footer.php');?>

