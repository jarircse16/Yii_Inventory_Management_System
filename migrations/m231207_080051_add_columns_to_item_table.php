<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%item}}`.
 */
class m231207_080051_add_columns_to_item_table extends Migration
{
  /**
      * {@inheritdoc}
      */
     public function safeUp()
     {
         $this->addColumn('{{%item}}', 'description', $this->text());
         $this->addColumn('{{%item}}', 'price', $this->decimal(10, 2));
     }

     /**
      * {@inheritdoc}
      */
     public function safeDown()
     {
         $this->dropColumn('{{%item}}', 'description');
         $this->dropColumn('{{%item}}', 'price');
     }
}
