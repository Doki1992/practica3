<?php

namespace app\controllers;

class ManejoController extends \yii\web\Controller
{
    public function actionCredito()
    {
        return $this->render('credito');
    }

    public function actionDebito()
    {
        return $this->render('debito');
    }

}
