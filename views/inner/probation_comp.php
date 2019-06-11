<?require(ROOT. '/views/inner/header.php'); ?>
<?include "components/probation_comp.php";?>


<h1>Мои Стажировки</h1>
<div class="add_resume">
    <a href="set_int?id=<?=$user['id'];?>">Добавить Стажировку</a>
</div>
<?foreach ($data as $data):?>
    <div class="resume_list">
        <div class="delite_res">
            <h2><a href="detail_res?id=<?=$data['id'];?>"><?=$data['name_internship'];?></a></h2>
            <div class="add_resume">
                <a href="remove_res?id=<?=$data['id'];?>">Удалить Стажировку</a>
            </div>
        </div>

        <span><?=$data['industry'];?></span>
        <span><?=$data['skills'];?></span>
    </div>


<?endforeach?>

<?require(ROOT. '/views/inner/footer.php');?>
