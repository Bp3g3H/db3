<?php

namespace app\models;

use app\models\base\OffersBase;
use yii\behaviors\TimestampBehavior;

class Offer extends OffersBase
{
    const CATEGORY_REAL_ESTATE_VALUE = 1;
    const CATEGORY_VEHICLE_VALUE = 2;
    const CATEGORY_ELECTRONICS_VALUE = 3;
    const CATEGORY_SPORT_VALUE = 4;
    const CATEGORY_PET_VALUE = 5;
    const CATEGORY_HOME_AND_GARDEN_VALUE = 6;
    const CATEGORY_FASHION_VALUE = 7;
    const CATEGORY_EXCURSIONS_AND_VACATION_VALUE = 8;

    const CATEGORY_REAL_ESTATE_STRING = 'Real Estate';
    const CATEGORY_VEHICLE_STRING = 'Vehicle';
    const CATEGORY_ELECTRONICS_STRING = 'Electronics';
    const CATEGORY_SPORT_STRING = 'Sport';
    const CATEGORY_PET_STRING = 'Pet';
    const CATEGORY_HOME_AND_GARDEN_STRING = 'Home and garden';
    const CATEGORY_FASHION_STRING = 'Fashion';
    const CATEGORY_EXCURSIONS_AND_VACATION_STRING = 'Excursion and vacation';

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

    public function getOfferCategoryArr()
    {
        return [
            self::CATEGORY_REAL_ESTATE_VALUE => self::CATEGORY_REAL_ESTATE_STRING,
            self::CATEGORY_VEHICLE_VALUE => self::CATEGORY_VEHICLE_STRING,
            self::CATEGORY_ELECTRONICS_VALUE => self::CATEGORY_ELECTRONICS_STRING,
            self::CATEGORY_SPORT_VALUE => self::CATEGORY_SPORT_STRING,
            self::CATEGORY_PET_VALUE => self::CATEGORY_PET_STRING,
            self::CATEGORY_HOME_AND_GARDEN_VALUE => self::CATEGORY_HOME_AND_GARDEN_STRING,
            self::CATEGORY_FASHION_VALUE => self::CATEGORY_FASHION_STRING,
            self::CATEGORY_EXCURSIONS_AND_VACATION_VALUE => self::CATEGORY_EXCURSIONS_AND_VACATION_STRING
        ];
    }
}