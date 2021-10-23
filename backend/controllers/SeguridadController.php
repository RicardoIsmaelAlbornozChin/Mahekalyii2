<?php

namespace backend\controllers;

class SeguridadController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'seguridadview';

        return $this->render('index');
    }

}
