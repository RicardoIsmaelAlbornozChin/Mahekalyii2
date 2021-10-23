<?php

namespace backend\controllers;

class ContabilidadController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'contabilidadview';

        return $this->render('index');
    }

}
