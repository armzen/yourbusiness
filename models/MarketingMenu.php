<?php

namespace app\models;

use Yii;


class MarketingMenu extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'marketing_menu';
    }

    public function getLang()
    {
        return $this->hasOne(Languages::className(), ['id' => 'lang_id']);
    }

    public function rules()
    {
        return [
            [['mklink1', 'mklink2', 'mklink3', 'mkhead', 'intro_text', 'full_text', 'lang_id'], 'required'],
            [['full_text'], 'string'],
            [['lang_id'], 'integer'],
            [['mklink1', 'mklink2', 'mklink3', 'mkhead', 'intro_text'], 'string', 'max' => 255],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Languages::className(), 'targetAttribute' => ['lang_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mklink1' => 'Mklink1',
            'mklink2' => 'Mklink2',
            'mklink3' => 'Mklink3',
            'mkhead' => 'Mkhead',
            'intro_text' => 'Intro Text',
            'full_text' => 'Full Text',
            'lang_id' => 'Lang ID',
        ];
    }
    
    public static function getMarketingMenuItems($lng) {
        $data = self::find()
                ->where(['lang_id' => $lng])
                ->asArray()
                ->all();
        return $data;
    }


}

/**
 * This is the model class for table "marketing_menu".
 *
 * @property string $id
 * @property string $mklink1
 * @property string $mklink2
 * @property string $mklink3
 * @property string $mkhead
 * @property string $intro_text
 * @property string $full_text
 * @property string $lang_id
 *
 * @property Languages $lang
 */