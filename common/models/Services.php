<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%services}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string|null $img
 *
 * @property Subservice[] $subservices
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%services}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['name', 'img'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 300],
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
            'description' => Yii::t('app', 'Description'),
            'img' => Yii::t('app', 'Img'),
        ];
    }

    /**
     * Gets query for [[Subservices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubservices()
    {
        return $this->hasMany(Subservice::className(), ['id_service' => 'id']);
    }
}
