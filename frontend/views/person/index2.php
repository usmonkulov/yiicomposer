<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'person-form',
    'options' => ['class' => 'form-horizontal'],
]);

echo $form->field($model, 'first_name');
echo $form->field($model, 'last_name');
echo $form->field($model, 'email')->input('email');
echo $form->field($model, 'gender')->dropdownList([
    'erkak' => 'Erkak',
    'ayol' => 'Ayol'
],
    ['prompt'=>'Tanlang']
);
echo Html::submitButton('Yuborish', ['class'=>'btn btn-success']);

ActiveForm::end() ?>
