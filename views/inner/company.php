<?require(ROOT. '/views/inner/header.php'); ?>
<?include "components/company.php";?>
<h1 class=" Index_h1">Компании</h1>
<? foreach($data as $data):?>
    <div class="CompanyList_item sj_stu_block h_clearfix">
        <div class="CompanyList_item_left">
            <img src="/img/matter.png" class="StudentCompanyListItem_logo">
        </div>
        <div class="matter_badge" style="margin:0;">
            <span class="CompanyList_item_contents_item_text"><?=$data['mobile_phone'];?></span>
        </div>
        <div class="CompanyList_item_right">
            <a href="detail_comp?id=<?=$data['id']?>" class="h_color_black h_border_none">
                <h2 class="sj_typo_h2 CompanyList_item_company h_color_black"><?=$data['name_org'];?></h2>
            </a>
            <div class="CompanyList_item_catalog h_color_gray_lt"></div>
            <div class="CompanyList_item_about h_color_black">
                <?=$data['activity'];?>
            </div>
            <div class="CompanyList_item_contents">
                <span class="CompanyList_item_contents_item_text"><?=$data['city'];?></span>
            </div>
        </div>
    </div>
<?endforeach;?>
<?require(ROOT. '/views/inner/footer.php');?>