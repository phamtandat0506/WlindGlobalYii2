<?php 

namespace app\controllers;
use yii\web\Controller;
use app\models\Hello;

class SystemController extends Controller {
    //Tao action 
    public function actionIndex() {
        return $this->render('index');
    }
}
