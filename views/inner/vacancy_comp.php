<?require(ROOT. '/views/inner/header.php'); ?>
<?include "components/vacancy_comp.php";?>


<h1>Мои Вакансии</h1>
<div class="add_resume">
    <a href="post_vacancy?id=<?=$user['id'];?>">Добавить Вакансию</a>
</div>
<?foreach ($data as $data):?>
    <div class="resume_list">
        <div class="delite_res">
            <h2><a href="detail_res?id=<?=$data['id'];?>"><?=$data['name'];?></a></h2>
            <div class="add_resume">
                <a href="remove_res?id=<?=$data['id'];?>">Удалить Вакансию</a>
            </div>
        </div>

        <span><?=$data['specialization'];?></span>
        <span><?=$data['key_skills'];?></span>
    </div>


<?endforeach?>

<?require(ROOT. '/views/inner/footer.php');?>
