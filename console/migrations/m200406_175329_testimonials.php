<?php

use yii\db\Migration;

/**
 * Class m200406_175329_testimonials
 */
class m200406_175329_testimonials extends Migration
{
    public static function tableName(){
        return '{{%page_testimonials}}';
    }
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable(self::tableName(), [
            'id' => $this->primaryKey()->notNull(),
            'contact_us_text' => $this->string(255)->null(),
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
