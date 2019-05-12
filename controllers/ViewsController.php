<?php

class ViewsController {
	
	public function actionIndex() {
		require_once(ROOT . '/views/template.php');
		return true;
	}
	/*--------------------------------------------------------*/
	public function actionLogin() {
		require_once(ROOT . '/views/login.html');
		return true;
	}
	public function actionSignup() {
		require_once(ROOT . '/views/signup.html');
		return true;
	}
}