<?php
session_start();
if(isset($_SESSION['login'])){
    class ViewsController {
        public function actionIndex() {
            require_once(ROOT . '/views/inner/template.php');
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
            require_once(ROOT . '/views/login_form.php');
            return true;
        }
        public function actionSignup() {
            require_once(ROOT . '/views/signup_form.php');
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
            require_once(ROOT . '/views/signup_company_form.php');
            return true;
        }
        public function actionStudents_regis() {
            require_once(ROOT . '/views/signup_student_form.php');
            return true;
        }

    }
}
