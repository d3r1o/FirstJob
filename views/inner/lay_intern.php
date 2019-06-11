<?require(ROOT. '/views/inner/header.php'); ?>
<?include "components/lay_intern.php";?>
<div class="detail_shape">
    <h1>Добавить Стажировку</h1>
    <div class="shape">
        <div class="right">
            <form method="post" class="detail_resume">
                <div class="box_title">
                    Название
                    <input type="text" name="name_internship"  value="">
                </div>
                <div class="box_title">
                    Дата начала
                    <input type="date" name="start_date"  value="">
                </div>
                <div class="box_title">
                    Дата окончания
                    <input type="date" name="end_date"  value="">
                </div>
                <div class="box_title">
                    Отрасль
                    <input type="text" name="industry"  value="">
                </div>
                <div class="box_title">
                    Город проведения стажировки
                    <input type="text" name="city"  value="">
                </div>
                <div class="box_title">
                    Адрес
                    <input type="text" name="address"  value="">
                </div>
                <div class="box_title">
                    Учащиеся вуза/колледжа
                    <input type="text" name="study"  value="">
                </div>
                <div class="box_title">
                    Курс обучения
                    <input type="text" name="course"  value="">
                </div>
                <div class="box_title">
                    График работы
                    <input type="text" name="schedule"  value="">
                </div>
                <div class="box_title">
                    Зарплата
                    <input type="text" name="salary"  value="">
                </div>
                <div class="box_title">
                    Какие навыки требуются
                    <input type="text" name="skills"  value="">
                </div>
                <div class="box_title">
                    Какие задачи выполнять
                    <textarea name="tasks" ></textarea>
                </div>
                <div class="box_title">
                    Условия стажировки
                    <textarea name="conditions" ></textarea>
                </div>
                <div class="box_title">
                    Гарантия трудоустройства
                    <input type="checkbox" name="job_security"  value="1">
                </div>

                <div class="box_title" style="float: right">
                    <input type="submit" name="save" value="Добавить стажировку">
                </div>
            </form>
        </div>
    </div>

</div>
<?require(ROOT. '/views/inner/footer.php');?>

