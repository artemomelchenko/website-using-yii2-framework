<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%page_services}}".
 *
 * @property int $id
 * @property string|null $for_fb_pixel
 * @property string|null $other_code
 */
class PageServices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%page_services}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['for_fb_pixel', 'other_code'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'for_fb_pixel' => Yii::t('app', 'For Fb Pixel'),
            'other_code' => Yii::t('app', 'Other Code'),
        ];
    }
}
