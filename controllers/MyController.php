<?php


namespace app\controllers;


use yii\web\Controller;

class MyController extends Controller
{
	public function actionIndex2()
	{
		$hi = 'привет';
		$users = ['igor', 'bob', 'piter'];
		$this->render('index2', ['hi' => $hi, 'users' => $users]);
	}
}