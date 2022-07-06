<?php 

namespace app\controllers;
use yii\web\Controller;

class HtmlController extends Controller {
    //Tao action 
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionNews() {
        return $this->render('news');
    }

}