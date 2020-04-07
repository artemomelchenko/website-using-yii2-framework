<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%main}}".
 *
 * @property int $id
 * @property string|null $main_text
 * @property string|null $under_main_text
 * @property string|null $contact_us_text
 */
class Main extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%main}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_text', 'under_main_text', 'contact_us_text'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'main_text' => Yii::t('app', 'Main Text'),
            'under_main_text' => Yii::t('app', 'Under Main Text'),
            'contact_us_text' => Yii::t('app', 'Contact Us Text'),
        ];
    }
}
