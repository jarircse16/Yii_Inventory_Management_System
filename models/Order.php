<?php

// models/Order.php

namespace app\models;

use yii\db\ActiveRecord;

class Order extends ActiveRecord
{
    public function rules()
    {
        return [
            [['customer_name', 'total_amount', 'status'], 'required'],
            [['customer_name'], 'string', 'max' => 255],
            [['total_amount'], 'number'],
            [['status'], 'in', 'range' => ['pending', 'completed']],
            // Add more validation rules as needed
        ];
    }
}
