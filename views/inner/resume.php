<?require(ROOT. '/views/inner/header.php'); ?>
<?include "components/resume.php";?>

<h1>Мои резюме</h1>
<div class="add_resume">
    <a href="add_shape">Добавить резюме</a>
</div>
<?foreach ($resume as $resume):?>
<div class="resume_list">
    <h2><a href="detail_res?id=<?=$resume['id'];?>"><?=$resume['name_resume'];?></a></h2>
    <span><?=$resume['area'];?></span>
    <span><?=$resume['key_skills'];?></span>
</div>

<?endforeach?>

<?require(ROOT. '/views/inner/footer.php');?>

