<?php

use yii\db\Migration;

/**
 * Class m200318_183352_testimonials
 */
class m200318_183352_testimonials extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{%testimonials}}', [
            'id' => $this->primaryKey()->notNull(),
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->null(),
            'img' => $this->string(255)->null(),
            'message' => $this->text()->notNull(),
            'accepted' => $this->boolean()->defaultValue(0),
            'created' => $this->boolean()->defaultValue(0),
            'date_create' => $this->dateTime()->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('{{%testimonials}}');
    }
}
