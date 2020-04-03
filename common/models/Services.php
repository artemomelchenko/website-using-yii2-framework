<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%services}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string|null $img
 *
 * @property Subservices[] $subservices
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
        return $this->hasMany(Subservices::className(), ['id_service' => 'id']);
    }

    public function getImg()
    {
        $image = UploadedFile::getInstance($this, 'img');
        if (!is_null($image)) {
            $ext = end((explode(".", $image->name)));
            $avatar = Yii::$app->security->generateRandomString() . ".{$ext}";
            Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') . '/web/img/' . $avatar;
            $path = Yii::$app->params['uploadPath'];
            $image->saveAs($path);
            $this->img = $avatar;
        }
    }

    public function getUpdate($id)
    {
        $old_img = self::findOne($id)->img;
        $image = UploadedFile::getInstance($this, 'img');
        if (is_null($image)) {
            $this->img = $old_img;
        } else {
            $ext = end((explode(".", $image->name)));
            $avatar = Yii::$app->security->generateRandomString() . ".{$ext}";
            Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') . '/web/img/' . $avatar;
            $path = Yii::$app->params['uploadPath'];
            $image->saveAs($path);
            $this->img = $avatar;
        }
    }
}
