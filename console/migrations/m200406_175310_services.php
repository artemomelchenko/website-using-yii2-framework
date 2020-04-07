<?php

use yii\db\Migration;

/**
 * Class m200406_175310_services
 */
class m200406_175310_services extends Migration
{
    public static function tableName(){
        return '{{%page_services}}';
    }
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable(self::tableName(), [
            'id' => $this->primaryKey()->notNull(),
            'for_fb_pixel' => $this->text()->null(),
            'other_code' => $this->text()->null(),
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
