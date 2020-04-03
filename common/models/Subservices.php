<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%subservices}}".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $price
 * @property int|null $hot
 * @property int $id_service
 *
 * @property Services $service
 */
class Subservices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%subservices}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'id_service'], 'required'],
            [['hot', 'id_service'], 'integer'],
            [['name', 'price'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 500],
            [['id_service'], 'exist', 'skipOnError' => true, 'targetClass' => Services::className(), 'targetAttribute' => ['id_service' => 'id']],
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
            'price' => Yii::t('app', 'Price'),
            'hot' => Yii::t('app', 'Hot'),
            'id_service' => Yii::t('app', 'Id Service'),
        ];
    }

    /**
     * Gets query for [[Service]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getService()
    {
        return $this->hasOne(Service::className(), ['id' => 'id_service']);
    }
}
