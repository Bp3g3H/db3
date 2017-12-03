<?php

namespace app\models;

use app\models\base\OffersBase;
use yii\behaviors\TimestampBehavior;

class Offer extends OffersBase
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