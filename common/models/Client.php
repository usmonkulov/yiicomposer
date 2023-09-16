<?php

namespace common\models;

use yii\db\ActiveRecord;

class Client extends ActiveRecord
{
    public static function tableName()
    {
        return 'client';
    }
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['client_id'=>'id']);
    }
}