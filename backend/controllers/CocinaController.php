<?php

namespace backend\controllers;

class CocinaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'cocinaview';

        return $this->render('index');
    }

}
