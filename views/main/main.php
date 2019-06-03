<?require(ROOT. '/views/main/header.php'); ?>
	<h1 class="sj_typo_h1 Index_h1">Стажировки</h1>
<?include "components/internships.php";?>
<? foreach($data as $data):?>
	<div class="matter stu_block h_position_relative">
		<div>
			<div class="matter_left">
				<img src="/img/matter.png" class="matterElement_logo">
			</div>
			<div class="matter_badge">
				<div class="sj_badge m_green">Стажировка</div>
			</div>
			<div class="matter_right m_logo">
				<a href="#" class="h_color_black h_border_none">
					<h2 class="matter_post h_color_black"><?=$data['name_internship']?></h2>
				</a>
				<div class="matter_payment h_color_gray_lt">
                    <?if(empty($data['salary'])):?>
						Неоплачиваемая стажировка
                    <?else:?>
                        <?=$data['salary'];?>&nbsp;рублей
                    <?endif?>
				</div>
				<div class="matter_about h_color_black"> 
					• Комфортный офис в районе м. Аэропорт,
					• Для Вас: чай, кофе, конфетки, дружелюбная и позитивная атмосфера!
				</div>
				<div class="matter_tags h_color_black">
                    <p class="sj_tag"><?=$data['name_org'];?></p>
                    <p class="sj_tag"><?=$data['industry'];?></p>
                    <p class="sj_tag"><?=$data['city'];?></p>
				</div>
			</div>
		</div>
	</div>
<?endforeach;?>
	<div class="matter_link">
        <a href="#" class="sj_btn">Все стажировки</a>
    </div>
<?require(ROOT. '/views/main/footer.php');?>