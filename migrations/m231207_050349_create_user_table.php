<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m231207_050349_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function up()
     {
         $this->createTable('user', [
             'id' => $this->primaryKey(),
             'username' => $this->string()->notNull(),
             'password_hash' => $this->string()->notNull(),
             // Add other user fields as needed
         ]);
     }

     public function down()
     {
         $this->dropTable('user');
     }
}
