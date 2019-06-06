<?require(ROOT. '/views/inner/header.php'); ?>
<?include "components/detail_internships.php";?>
<div class="sj_stu_block">
    <br>
    <?if($intern['job_security'] == 1):?>
    <span class="Traineeship_label m_warranty">Гарантия трудоустройства</span>
    <?endif?>
    <div class="">
        <h1 class="sj_typo_h1 Traineeship_title">
            <?=$intern['name_internship'];?>
        </h1>
        <p class="sj_typo_p " style="margin-top: -10px;">
            <?=$intern['salary'];?> рублей
        </p>
    </div>
    <div class="sj_g_row Traineeship_row">
        <br class="h_mobile_visible">
        <!-- Левый блок -->
        <div class="sj_g_col_md_6  sj_g_col_sm_6 Traineeship_title_common_info">
            <h3 class="sj_typo_h3 Traineeship_title_h3">Какие задачи выполнять?</h3>
            <p class="sj_typo_p Traineeship_p Traineeship_preline Traineeship_responsibilities" style="margin-top: -20px">
                <?=$intern['tasks'];?>
            </p>
            <h3 class="sj_typo_h3 Traineeship_title_h3" >Условия стажировки</h3>
            <p class="sj_typo_p Traineeship_p Traineeship_preline Traineeship_description" style="margin-top: -20px">
                <?=$intern['conditions'];?>
            </p>
            <h3 class="sj_typo_h3 Traineeship_title_h3" >Какие навыки требуются?</h3>
            <p class="sj_typo_p Traineeship_p Traineeship_preline Traineeship_skills" style="margin-top: -20px">
                <?=$intern['skills'];?>
            </p>
        </div>
        <!-- Правый блок -->
        <div class="sj_g_col_md_5 sj_g_col_md_push_1 sj_g_col_sm_6 Traineeship_rightcol">
            <div class="sj_g_row Traineeship_row Traineeship_response_secondbutton">
                <div class="sj_g_col_md_12 sj_g_col_xs_12 h_mobile_hidden">
                    <div>
                        <a href="#" class="sj_btn m_green m_medium m_stretch">Откликнуться на стажировку</a>
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
                    <h3 class="sj_typo_h3 Traineeship_company_name"><?=$intern['society'];?> <?=$intern['name_org'];?></h3>
                </div>
            </div>
            <div class="Traineeship_details h_mobile_hidden">
                <h4 class="sj_typo_h4 Traineeship_title_h4">Требование</h4>
                <p class="sj_typo_p Traineeship_p Traineeship_requirements">
                    <?=$intern['course'];?><br>
                    <?=$intern['schedule'];?>
                </p>
                <h4 class="sj_typo_h4 Traineeship_title_h4">Срок проведения</h4>
                <p class="sj_typo_p Traineeship_p Traineeship_period">
                    <?=$intern['start_date'];?>—<?=$intern['end_date'];?>
                </p>
            </div>
        </div>
    </div>
</div>

<?require(ROOT. '/views/inner/footer.php');?>
