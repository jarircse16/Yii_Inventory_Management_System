<?php

use yii\db\Migration;

/**
 * Class m231207_090829_modify_payment_date_column
 */
class m231207_090829_modify_payment_date_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%payment}}', 'payment_date', $this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('{{%payment}}', 'payment_date', $this->date()->notNull());
    }
}
