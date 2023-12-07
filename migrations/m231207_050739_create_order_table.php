<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 */
class m231207_050739_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function up()
     {
         $this->createTable('order', [
             'id' => $this->primaryKey(),
             'user_id' => $this->integer(),
             'total_amount' => $this->decimal(10, 2)->notNull(),
             // Add other order fields as needed
         ]);

         $this->addForeignKey(
             'fk-order-user_id',
             'order',
             'user_id',
             'user',
             'id',
             'CASCADE'
         );
     }

     public function down()
     {
         $this->dropTable('order');
     }
}
