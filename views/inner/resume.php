<?require(ROOT. '/views/inner/header.php'); ?>
<?include "components/resume.php";?>

<h1>Мои резюме</h1>
<div class="add_resume">
    <a href="add_shape?id=<?=$user['id'];?>">Добавить резюме</a>
</div>
<?foreach ($resume as $resume):?>
<div class="resume_list">
    <div class="delite_res">
        <h2><a href="detail_res?id=<?=$resume['id'];?>"><?=$resume['name_resume'];?></a></h2>
        <div class="add_resume">
            <a href="remove_res?id=<?=$resume['id'];?>">Удалить резюме</a>
        </div>
    </div>

    <span><?=$resume['area'];?></span>
    <span><?=$resume['key_skills'];?></span>
</div>


<?endforeach?>

<?require(ROOT. '/views/inner/footer.php');?>

