<?php

use yii\db\Migration;

/**
 * Class m200406_175304_main
 */
class m200406_175304_main extends Migration
{
    public static function tableName(){
        return '{{%main}}';
    }
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable(self::tableName(), [
            'id' => $this->primaryKey()->notNull(),
            'main_text' => $this->string(255)->null(),
            'under_main_text' => $this->string(255)->null(),
            'contact_us_text' => $this->string(255)->null(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable(self::tableName());
    }
}
