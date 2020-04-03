<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%testimonials}}".
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property string|null $img
 * @property string $message
 * @property int|null $accepted
 * @property int|null $created
 * @property string $date_create
 */
class Testimonials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%testimonials}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'message', 'date_create'], 'required'],
            [['message'], 'string'],
            [['accepted', 'created'], 'integer'],
            [['date_create'], 'safe'],
            [['name', 'email', 'img'], 'string', 'max' => 255],
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
            'img' => Yii::t('app', 'Img'),
            'message' => Yii::t('app', 'Message'),
            'accepted' => Yii::t('app', 'Accepted'),
            'created' => Yii::t('app', 'Created'),
            'date_create' => Yii::t('app', 'Date Create'),
        ];
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
