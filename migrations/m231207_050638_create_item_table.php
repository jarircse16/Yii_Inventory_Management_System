<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%item}}`.
 */
class m231207_050638_create_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function up()
     {
         $this->createTable('item', [
             'id' => $this->primaryKey(),
             'name' => $this->string()->notNull(),
             'category_id' => $this->integer(),
             // Add other item fields as needed
         ]);

         $this->addForeignKey(
             'fk-item-category_id',
             'item',
             'category_id',
             'category',
             'id',
             'CASCADE'
         );
     }

     public function down()
     {
         $this->dropTable('item');
     }
}
