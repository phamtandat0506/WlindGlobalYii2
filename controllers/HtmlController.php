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

    public function actionMedia() {
        return $this->render('media');
    }
    
    public function actionService() {
        return $this->render('service');
    }

    public function actionWic() {
        return $this->render('wic');
    }

    public function actionWsun() {
        return $this->render('wsun');
    }

    public function actionContact() {
        return $this->render('contact');
    }
    
    public function actionClub() {
        return $this->render('club');
    }
}