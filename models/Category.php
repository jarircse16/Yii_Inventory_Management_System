<?php

// models/Category.php

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            // Add more validation rules as needed
        ];
    }
}
