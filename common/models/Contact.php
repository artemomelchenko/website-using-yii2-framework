<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%contact}}".
 *
 * @property int $id
 * @property string|null $contact_us_text
 * @property string|null $for_fb_pixel
 * @property string|null $other_code
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%contact}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['for_fb_pixel', 'other_code'], 'string'],
            [['contact_us_text'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'contact_us_text' => Yii::t('app', 'Contact Us Text'),
            'for_fb_pixel' => Yii::t('app', 'For Fb Pixel'),
            'other_code' => Yii::t('app', 'Other Code'),
        ];
    }
}
