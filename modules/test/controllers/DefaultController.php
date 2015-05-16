<?php

namespace app\modules\test\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
//        return $this->render('index');
        $this->redirect(['default/test']);
    }
    
    public function actionTest() {
        return $this->render('test');
    }
    
    public function actionTest1(){
//        return $this->renderPartial('test1'); //1
        return $this->getView()->render('test1', [], $this);
    }
}
