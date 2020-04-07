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
 * @property string|null $google_analitycs
 * @property string|null $fb_pixel
 * @property string|null $email
 * @property string|null $text_for_privacy_policy
 * @property string|null link_for_messenger
 * @property string|null pixel_for_success
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
            [['for_code', 'google_analitycs', 'fb_pixel', 'text_for_privacy_policy', 'pixel_for_success'], 'string'],
            [['fb_link', 'telegram_link', 'email', 'link_for_messenger'], 'string', 'max' => 255],
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
            'google_analitycs' => Yii::t('app', 'Google Analitycs'),
            'fb_pixel' => Yii::t('app', 'Fb Pixel'),
            'email' => Yii::t('app', 'Email'),
            'text_for_privacy_policy' => Yii::t('app', 'Text For Privacy Policy'),
            'link_for_messenger' => Yii::t('app', 'Link For Messenger'),
            'pixel_for_success' => Yii::t('app', 'Pixel For Success'),
        ];
    }
}
