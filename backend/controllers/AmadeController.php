<?php

namespace backend\controllers;

class AmadeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'amadeview';

        return $this->render('index');
    }

}
