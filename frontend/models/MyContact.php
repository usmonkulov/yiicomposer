<?php
namespace frontend\models;

use frontend\controllers\Post;

use yii\base\Model;

class MyContact extends Model
{
	public $malumot_1;
	public $malumot_2;
	public $file;

	public function rules()
	{
		return [
			[['malumot_2'], 'required', 'message'=>'To`ldirish shart'],
            //['malumot_1', 'email', 'message'=>'E-mail qiymat kiriting'],
           // ['malumot_1', 'integer', 'message'=>'Integer turdagi son kiriting'],
           // ['malumot_1', 'integer', 'max'=>100, 'min'=>2, 'tooBig'=>'Juda katta', 'tooSmall'=>'Juda kichik'],
            //['malumot_1', 'string', 'max'=>12, 'min'=>4],
           // [['malumot_1','malumot_2'], 'trim'],
           // ['malumot_1', 'url', 'defaultScheme' => 'http'],
           // ['malumot_1', 'in', 'range'=>['en', 'fr', 'ru']],
           // [['malumot_1', 'malumot_2'], 'date', 'format'=>'php:Y-m-d'],
           // [['malumot_1', 'malumot_2'], 'datetime', 'format'=>'php:Y-m-d H:i:s'],
            ['malumot_1', 'default', 'value'=>"Salom"],
            ['file', 'image', 'extensions'=> 'png, jpg'],
		];
	}
}
?>
