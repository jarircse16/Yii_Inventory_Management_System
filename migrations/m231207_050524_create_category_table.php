<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m231207_050524_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function up()
     {
         $this->createTable('category', [
             'id' => $this->primaryKey(),
             'name' => $this->string()->notNull(),
             // Add other category fields as needed
         ]);
     }

     public function down()
     {
         $this->dropTable('category');
     }
}
