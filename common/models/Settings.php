<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%settings}}".
 *
 * @property int $id
 * @property string|null $for_code
 * @property string|null $fb_link
 * @property string|null $telegram_link
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%settings}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['for_code'], 'string'],
            [['fb_link', 'telegram_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'for_code' => Yii::t('app', 'For Code'),
            'fb_link' => Yii::t('app', 'Fb Link'),
            'telegram_link' => Yii::t('app', 'Telegram Link'),
        ];
    }
}
