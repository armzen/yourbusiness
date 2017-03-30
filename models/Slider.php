<?php

namespace app\models;
use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property string $id
 * @property string $slhead
 * @property string $sltext
 * @property string $slimg
 * @property string $lang_id
 *
 * @property Languages $lang
 */
class Slider extends ActiveRecord
{



    public static function tableName()
    {
        return 'slider';
    }

    public function rules()
    {
        return [
            [['slhead', 'sltext', 'slimg', 'lang_id'], 'required'],
            [['sltext'], 'string'],
            [['lang_id'], 'integer'],
            [['slhead', 'slimg'], 'string', 'max' => 255],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Languages::className(), 'targetAttribute' => ['lang_id' => 'id']],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slhead' => 'Slhead',
            'sltext' => 'Sltext',
            'slimg' => 'Slimg',
            'lang_id' => 'Lang ID',
        ];
    }


    public function getLang()
    {
        return $this->hasOne(Languages::className(), ['id' => 'lang_id']);
    }

    public static function getAllitems($lng) {
        $data = self::find()
            ->where(['lang_id' => $lng])
            ->asArray()
            ->all();

        return $data;
    }
}
