<?php

namespace frontend\controllers;

use common\models\Client;
use common\models\Order;
use yii\web\Controller;

class ProfileController extends Controller
{
    public function actionIndex()
    {
        $model = Order::find()->all();

        return $this->render('index', [
            'model'=>$model,
        ]);
    }
}