<?php

use yii\db\Migration;

/**
 * Class m200318_183402_settings
 */
class m200318_183402_settings extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{%settings}}', [
            'id' => $this->primaryKey()->notNull(),
            'for_code' => $this->text()->null(),
            'fb_link' => $this->string(255)->null(),
            'telegram_link' => $this->string(255)->null(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('{{%settings}}');
    }
}
