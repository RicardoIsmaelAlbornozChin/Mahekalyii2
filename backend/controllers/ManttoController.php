<?php

namespace backend\controllers;

class ManttoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'manttoview';

        return $this->render('index');
    }

}
