<?require(ROOT. '/views/main/header.php');?>
<?include "components/detail_job.php";?>

<div class="sj_stu_block">
    <div class="">
        <h1 class="sj_typo_h1 Traineeship_title">
            <?=$comp['title'];?>
        </h1>
        <p class="sj_typo_p " style="margin-top: -10px;">
            <?=$comp['income_level'];?> рублей
        </p>
    </div>
    <div class="sj_g_row Traineeship_row">
        <br class="h_mobile_visible">
        <!-- Левый блок -->
        <div class="sj_g_col_md_6  sj_g_col_sm_6 Traineeship_title_common_info">
            <h3 class="sj_typo_h3 Traineeship_title_h3">Описание</h3>
            <p class="sj_typo_p Traineeship_p Traineeship_preline Traineeship_responsibilities" style="margin-top: -20px">
                <?=$comp['description'];?>
            </p>
            <h3 class="sj_typo_h3 Traineeship_title_h3" >Ключевые навыки</h3>
            <p class="sj_typo_p Traineeship_p Traineeship_preline Traineeship_skills" style="margin-top: -20px">
                <?=$comp['key_skills'];?>
            </p>
        </div>
        <!-- Правый блок -->
        <div class="sj_g_col_md_5 sj_g_col_md_push_1 sj_g_col_sm_6 Traineeship_rightcol">
            <div class="sj_g_row Traineeship_row Traineeship_response_secondbutton">
                <div class="sj_g_col_md_12 sj_g_col_xs_12 h_mobile_hidden">
                    <div>
                        <a href="login" class="sj_btn m_green m_medium m_stretch">Откликнуться на вакансию</a>
                    </div>
                </div>
            </div>
            <div class="sj_g_row Traineeship_company Traineeship_row">
                <div class="sj_g_col_md_12 sj_g_col_xs_4 h_mobile_hidden h_tablet_hidden" style="margin-bottom: 10px;">
                    <!-- Логотип -->
                    <img src="/img/matter.png">
                </div>

                <div class="sj_g_col_md_12 sj_g_col_xs_8">
                    <!-- Компания -->
                    <h3 class="sj_typo_h3 Traineeship_company_name"><?=$comp['society'];?> <?=$comp['name_org'];?></h3>
                </div>
            </div>
            <div class="Traineeship_details h_mobile_hidden">
                <h4 class="sj_typo_h4 Traineeship_title_h4">Тип занятости</h4>
                <p class="sj_typo_p Traineeship_p Traineeship_requirements">
                    <?=$comp['type_employment'];?>
                </p>
                <h4 class="sj_typo_h4 Traineeship_title_h4">График работы</h4>
                <p class="sj_typo_p Traineeship_p Traineeship_period">
                    <?=$comp['schedule'];?>
                </p>
            </div>
        </div>
    </div>
</div>

<?require(ROOT. '/views/main/footer.php');?>
