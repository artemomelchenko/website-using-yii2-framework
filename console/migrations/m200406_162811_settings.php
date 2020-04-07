<?php

use yii\db\Migration;

/**
 * Class m200406_162811_settings
 */
class m200406_162811_settings extends Migration
{
    public function safeUp()
    {

        $this->addColumn('settings', 'google_analitycs', $this->text()->null());
        $this->addColumn('settings', 'fb_pixel', $this->text()->null());
        $this->addColumn('settings', 'email', $this->string(255)->null());
        $this->addColumn('settings', 'text_for_privacy_policy', $this->text()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropColumn('settings', 'google_analitycs');
        $this->dropColumn('settings', 'fb_pixel');
        $this->dropColumn('settings', 'email');
        $this->dropColumn('settings', 'text_for_privacy_policy');
    }
}
