<?php

namespace backend\controllers;

class AlmacenController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'almacenview';

        return $this->render('index');
    }

}
