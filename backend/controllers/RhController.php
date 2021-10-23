<?php

namespace backend\controllers;

class RhController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'rhview';

        return $this->render('index');
    }

}
