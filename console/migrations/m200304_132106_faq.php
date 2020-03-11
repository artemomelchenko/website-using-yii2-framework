<?php

use yii\db\Migration;

/**
 * Class m200304_132106_faq
 */
class m200304_132106_faq extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{%faq}}', [
            'id' => $this->primaryKey()->notNull(),
            'question' => $this->string(255)->notNull(),
            'answer' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('{{%faq}}');
    }
}
