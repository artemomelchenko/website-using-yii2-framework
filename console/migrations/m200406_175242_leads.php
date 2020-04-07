<?php

use yii\db\Migration;

/**
 * Class m200406_175242_leads
 */
class m200406_175242_leads extends Migration
{

    public static function tableName(){
        return '{{%leads}}';
    }
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable(self::tableName(), [
            'id' => $this->primaryKey()->notNull(),
            'name' => $this->string(255)->null(),
            'email' => $this->string(255)->null(),
            'message' => $this->text()->null(),
            'page' => $this->integer(11)->null(),
            'id_service' => $this->integer(11)->null(),
            'id_subservice' => $this->integer(11)->null(),
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
