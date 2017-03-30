<?php

namespace app\models;
use Yii;

class TrainingMenu extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'training_menu';
    }  
    /* join */
    public function getLang()
    {
        return $this->hasOne(Languages::className(), ['id' => 'lang_id']);
    }
    
    public function rules()
    {
        return [
            [['trlink1', 'trlink2', 'trlink3', 'trhead', 'intro_text', 'full_text', 'lang_id'], 'required'],
            [['lang_id'], 'integer'],
            [['trlink1', 'trlink2', 'trlink3', 'trhead', 'intro_text',], 'string', 'max' => 255],
            [['full_text'], 'string', 'min' => '10'],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Languages::className(), 'targetAttribute' => ['lang_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'trlink1' => 'Trlink1',
            'trlink2' => 'Trlink2',
            'trlink3' => 'Trlink3',
            'trhead' => 'Trhead',
            'intro_text' => 'Intro Text',
            'full_text' => 'Full Text',
            'lang_id' => 'Lang ID',
        ];
    }

    public static function getTrainingMenuItems($lng){
        $data = self::find()
                ->where(['lang_id' => $lng])
                ->asArray()
                ->all();
        return $data;
    }
    
    public static function btnTranslate($lng){
         switch ($lng){
            case 1:
                $read_more = 'կարդալ ավելին..';
                break;
            case 2:
                $read_more = 'read more..';
                break;
            case 3:
                $read_more = 'узнать больше..';
                break;
            default :
                $read_more = 'կարդալ ավելին';
        }        
        return $read_more;
    }
    
    
}

/**
 * This is the model class for table "training_menu".
 *
 * @property string $id
 * @property string $trlink1
 * @property string $trlink2
 * @property string $trlink3
 * @property string $trhead
 * @property string $intro_text
 * @property string $full_text
 * @property string $lang_id
 *
 * @property Languages $lang
 */