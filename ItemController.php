<?php

namespace app\;

class ItemController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
