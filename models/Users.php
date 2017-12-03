<?php

namespace app\models;

use app\models\base\UsersBase;
use yii\behaviors\TimestampBehavior;

class Users extends UsersBase
{
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => date('c'),
            ]
        ];
    }
}