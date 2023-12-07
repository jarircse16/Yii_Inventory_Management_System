<?php

namespace app\models;

use yii\db\ActiveRecord;

class Item extends ActiveRecord
{
    public function rules()
    {
        return [
            [['name', 'description', 'price'], 'required'],
            [['name', 'description'], 'string', 'max' => 255],
            [['price'], 'number'],
            // Add more validation rules as needed
        ];
    }
}
