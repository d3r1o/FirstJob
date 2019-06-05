<?require(ROOT. '/views/main/header.php'); ?>
<?include "components/firstjob.php";?>
<h1 class=" Index_h1">Вакансии</h1>
<? foreach($data as $data):?>
<div class="matter stu_block h_position_relative">
    <div>
        <div class="matter_left">
            <img src="/img/matter.png" class="matterElement_logo">
        </div>
        <div class="matter_badge">
            <div class="sj_badge m_green">Первая работа</div>
        </div>
        <div class="matter_right m_logo">
            <a href="#" class="h_color_black h_border_none">
                <h2 class="matter_post h_color_black"><?=$data['name'];?></h2>
            </a>
            <div class="matter_payment h_color_gray_lt">
                <?=$data['income_level'];?>&nbsp;рублей
            </div>
            <div class="matter_about h_color_black">
                <?=$data['description'];?>
            </div>
            <div class="matter_tags h_color_black">
                <p class="sj_tag"><?=$data['name_org'];?></p>
                <p class="sj_tag"><?=$data['specialization'];?></p>
                <p class="sj_tag"><?=$data['city'];?></p>
            </div>
        </div>
    </div>
</div>
<?endforeach;?>
<?require(ROOT. '/views/main/footer.php');?>

