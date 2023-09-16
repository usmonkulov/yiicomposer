<?php

namespace backend\controllers;

use yii\rest\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        return [
            'test' => 'test'
        ];
    }
}