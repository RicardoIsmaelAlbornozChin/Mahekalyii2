<?php

namespace backend\controllers;

class SistemasController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'sistemasview';
        return $this->render('index');
    }

}
