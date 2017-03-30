<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Contacts extends Model
{
    public $name;
    public $email;
    public $body;

    public function rules()
    {
        return[
            [['name', 'email', 'body'], 'required'],
            ['email', 'email'],
        ];
    }


    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setTextBody($this->body)
                ->send();
            return true;
        }
        return false;
    }

}