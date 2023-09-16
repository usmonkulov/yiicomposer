<?php
namespace frontend\controllers;

use frontend\models\MyContact;
use yii\web\Controller;

class PostController extends Controller
{

	public $defaultAction = 'index';



	public function actionIndex()
	{
        $model = new MyContact();
        if(\Yii::$app->request->isPost){
            $formData = \Yii::$app->request->post();
            $model->attributes = $formData;
            if($model->validate()){
                \Yii::$app->session->setFlash('success', 'Validatsiyadan o`tdi');
            }
        }
		return $this->render('index', ['model'=>$model]);
	}


}

?>