<?php

namespace backend\controllers;

class RecepcionController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'recepcionview';

        return $this->render('index');
    }

}
