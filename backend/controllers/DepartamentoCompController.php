<?php

namespace backend\controllers;

class DepartamentoCompController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'comprasview';
        return $this->render('index');
    }

}
