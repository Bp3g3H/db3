<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "offers".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $description
 * @property double $price
 * @property string $created_at
 * @property string $updated_at
 * @property string $title
 * @property integer $category
 *
 * @property OfferImages[] $offerImages
 * @property Users $user
 */
class OffersBase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'offers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'category'], 'required'],
            [['user_id', 'category'], 'integer'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 60],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => UsersBase::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'description' => 'Description',
            'price' => 'Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'title' => 'Title',
            'category' => 'Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOfferImages()
    {
        return $this->hasMany(OfferImagesBase::className(), ['offer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(UsersBase::className(), ['id' => 'user_id']);
    }
}
