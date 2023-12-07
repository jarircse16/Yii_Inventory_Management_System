<?php

namespace app\models;

use yii\db\ActiveRecord;

class Payment extends ActiveRecord
{

    public function rules()
    {
        return [
            [['amount', 'payment_date', 'method'], 'required'],
            [['amount'], 'number'],
            [['payment_date'], 'safe'],
            [['method'], 'string', 'max' => 255],
        ];
    }
}
