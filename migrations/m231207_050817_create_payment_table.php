<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%payment}}`.
 */
class m231207_050817_create_payment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function up()
     {
         $this->createTable('payment', [
             'id' => $this->primaryKey(),
             'order_id' => $this->integer(),
             'amount' => $this->decimal(10, 2)->notNull(),
             // Add other payment fields as needed
         ]);

         $this->addForeignKey(
             'fk-payment-order_id',
             'payment',
             'order_id',
             'order',
             'id',
             'CASCADE'
         );
     }

     public function down()
     {
         $this->dropTable('payment');
     }
}
