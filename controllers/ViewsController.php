<?php
session_start();
if(isset($_SESSION['login'])){
    class ViewsController {

        public function actionIndex() {
            require_once(ROOT . '/views/template.php');
            return true;
        }
        /*--------------------------------------------------------*/

        public function actionCompany() {
            require_once(ROOT . '/views/inner/company.php');
            return true;
        }
        public function actionInternships() {
            require_once(ROOT . '/views/inner/internships.php');
            return true;
        }
        public function actionlogout() {
            require_once(ROOT . '/components/logout.php');
            return true;
        }
        public function actionDetail_intern() {
            require_once(ROOT . '/views/inner/detail_internships.php');
            return true;
        }
        public function actionDetail_job() {
            require_once(ROOT . '/views/inner/detail_job.php');
            return true;
        }
        public function actionDetail_comp() {
            require_once(ROOT . '/views/inner/detail_comp.php');
            return true;
        }
        public function actionProfile_student() {
            require_once(ROOT . '/views/inner/profile_student.php');
            return true;
        }
        public function actionProfile_crew() {
            require_once(ROOT . '/views/inner/profile_company.php');
            return true;
        }
        public function actionResume() {
            require_once(ROOT . '/views/inner/resume.php');
            return true;
        }
        public function actionDetail_res() {
            require_once(ROOT . '/views/inner/detail_resume.php');
            return true;
        }
        public function actionAdd_shape() {
            require_once(ROOT . '/views/inner/add_shape.php');
            return true;
        }
        public function actionRemove_res() {
            require_once(ROOT . '/components/remove_res.php');
            return true;
        }
        public function actionVacancy_comp() {
            require_once(ROOT . '/views/inner/vacancy_comp.php');
            return true;
        }
        public function actionProbation_comp() {
            require_once(ROOT . '/views/inner/probation_comp.php');
            return true;
        }


    }
}else{
    class ViewsController {

        public function actionIndex() {
            require_once(ROOT . '/views/template.php');
            return true;
        }
        /*--------------------------------------------------------*/
        public function actionLogin() {
            require_once(ROOT . '/views/autos/login_form.php');
            return true;
        }
        public function actionSignup() {
            require_once(ROOT . '/views/autos/signup_form.php');
            return true;
        }
        public function actionCompany() {
            require_once(ROOT . '/views/main/company.php');
            return true;
        }
        public function actionInternships() {
            require_once(ROOT . '/views/main/internships.php');
            return true;
        }
        public function actionComp_regis() {
            require_once(ROOT . '/views/autos/signup_company_form.php');
            return true;
        }
        public function actionStudents_regis() {
            require_once(ROOT . '/views/autos/signup_student_form.php');
            return true;
        }
        public function actionlogout() {
            require_once(ROOT . '/components/logout.php');
            return true;
        }
        public function actionDetail_intern() {
            require_once(ROOT . '/views/main/detail_internships.php');
            return true;
        }
        public function actionDetail_job() {
            require_once(ROOT . '/views/main/detail_job.php');
            return true;
        }
        public function actionDetail_comp() {
            require_once(ROOT . '/views/main/detail_comp.php');
            return true;
        }

    }
}

