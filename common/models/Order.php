<?php

namespace common\models;

use yii\db\ActiveRecord;

class Order extends ActiveRecord
{
    public static function tableName()
    {
        return 'order';
    }
    public function getClient()
    {
        return $this->hasOne(Client::className(), ['id'=>'client_id']);
    }
}