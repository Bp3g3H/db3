<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "offer_images".
 *
 * @property integer $id
 * @property integer $offer_id
 * @property string $hash_name
 * @property string $real_name
 * @property string $extension
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Offers $offer
 */
class OfferImagesBase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'offer_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['offer_id', 'hash_name', 'real_name', 'extension'], 'required'],
            [['offer_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['hash_name', 'real_name'], 'string', 'max' => 60],
            [['extension'], 'string', 'max' => 10],
            [['offer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Offers::className(), 'targetAttribute' => ['offer_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'offer_id' => 'Offer ID',
            'hash_name' => 'Hash Name',
            'real_name' => 'Real Name',
            'extension' => 'Extension',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOffer()
    {
        return $this->hasOne(Offers::className(), ['id' => 'offer_id']);
    }
}
