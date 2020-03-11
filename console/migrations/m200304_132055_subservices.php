<?php

use yii\db\Migration;

/**
 * Class m200304_132055_subservices
 */
class m200304_132055_subservices extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{%subservices}}', [
            'id' => $this->primaryKey()->notNull(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->string(500)->null(),
            'price' => $this->string(255)->null(),
            'hot' => $this->boolean()->defaultValue(0),
            'id_service' => $this->integer(11)->notNull(),
        ]);

        $this->createIndex(
            'idx-subservices-id_service',
            'subservices',
            'id_service'
        );

        $this->addForeignKey(
            'fk-subservices-id_service',
            'subservices',
            'id_service',
            'services',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropForeignKey(
            'fk-subservices-id_service',
            'subservices'
        );

        $this->dropIndex(
            'idx-subservices-id_service',
            'subservices'
        );

        $this->dropTable('{{%subservices}}');
    }
}
