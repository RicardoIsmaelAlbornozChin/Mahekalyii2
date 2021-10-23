<?php

namespace backend\controllers;

class AlimentosController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'aybview';

        return $this->render('index');
    }

}
