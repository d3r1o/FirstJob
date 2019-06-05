<?require(ROOT. '/views/main/header.php');?>
<?include "components/detail_comp.php";?>

<div class="sj_stu_block">
    <div class="">
        <h1 class="sj_typo_h1 Traineeship_title">
            <?=$bunch['society'];?> <?=$bunch['name_org'];?>
        </h1>
    </div>
    <div class="sj_g_row Traineeship_row">
        <br class="h_mobile_visible">
        <!-- Левый блок -->
        <div class="sj_g_col_md_6  sj_g_col_sm_6 Traineeship_title_common_info">
            <h3 class="sj_typo_h3 Traineeship_title_h3">Деятельность организации</h3>
            <p class="sj_typo_p Traineeship_p Traineeship_preline Traineeship_responsibilities" style="margin-top: -20px">
                <?=$bunch['activity'];?>
            </p>
            <h3 class="sj_typo_h3 Traineeship_title_h3">Представитель</h3>
            <p class="sj_typo_p Traineeship_p Traineeship_preline Traineeship_responsibilities" style="margin-top: -20px">
                <?=$bunch['surname'];?> <?=$bunch['name'];?>
            </p>
            <h3 class="sj_typo_h3 Traineeship_title_h3">Должность</h3>
            <p class="sj_typo_p Traineeship_p Traineeship_preline Traineeship_responsibilities" style="margin-top: -20px">
                <?=$bunch['post'];?>
            </p>
        </div>
        <!-- Правый блок -->
        <div class="sj_g_col_md_5 sj_g_col_md_push_1 sj_g_col_sm_6 Traineeship_rightcol">

            <div class="sj_g_row Traineeship_company Traineeship_row">
                <div class="sj_g_col_md_12 sj_g_col_xs_4 h_mobile_hidden h_tablet_hidden" style="margin-bottom: 10px;">
                    <!-- Логотип -->
                    <img src="/img/matter.png">
                </div>
            </div>
            <div class="Traineeship_details h_mobile_hidden">
                <h4 class="sj_typo_h4 Traineeship_title_h4">Количество сотрудников</h4>
                <p class="sj_typo_p Traineeship_p Traineeship_requirements">
                    <?=$bunch['employees_sum'];?> человек
                </p>
                <h4 class="sj_typo_h4 Traineeship_title_h4">Город</h4>
                <p class="sj_typo_p Traineeship_p Traineeship_period">
                    <?=$bunch['city'];?>
                </p>
            </div>
        </div>
    </div>
</div>

<?require(ROOT. '/views/main/footer.php');?>
