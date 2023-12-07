<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 */
class m231207_081915_create_order_table extends Migration
{
  /**
      * {@inheritdoc}
      */
     public function safeUp()
     {
         $this->createTable('order', [
             'id' => $this->primaryKey(),
             'customer_name' => $this->string()->notNull(),
             'total_amount' => $this->decimal(10, 2)->notNull(),
             'status' => $this->string()->notNull(),
             // Add more columns as needed
         ]);
     }

     /**
      * {@inheritdoc}
      */
     public function safeDown()
     {
         $this->dropTable('order');
     }
}
