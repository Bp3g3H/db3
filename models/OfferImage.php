<?php

namespace app\models;

use app\models\base\OfferImagesBase;
use yii\behaviors\TimestampBehavior;

class OfferImage extends  OfferImagesBase
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