<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%leads}}".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $message
 * @property int|null $page
 * @property int|null $id_service
 * @property int|null $id_subservice
 */
class Leads extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%leads}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['page', 'id_service', 'id_subservice'], 'integer'],
            [['name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'message' => Yii::t('app', 'Message'),
            'page' => Yii::t('app', 'Page'),
            'id_service' => Yii::t('app', 'Id Service'),
            'id_subservice' => Yii::t('app', 'Id Subservice'),
        ];
    }
}
