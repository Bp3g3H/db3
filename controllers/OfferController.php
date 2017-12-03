<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3.12.2017 г.
 * Time: 17:56 ч.
 */

namespace app\controllers;


use app\models\Offer;
use yii\helpers\Url;
use yii\web\Controller;

class OfferController extends Controller
{
    public function actionView($id)
    {
        $model = Offer::findOne(['id' => $id]);

        if($model)
        {
            return $this->render('view',
                [
                    'model'=>$model,
                ]);
        }

        \Yii::$app->session->flash('Undefined offer');
        $this->redirect(Url::toRoute('site/index'));

    }

    public function actionCreate()
    {
        $model = new Offer();


        return $this->render('create', [
            'model'=>$model,
        ]);
    }

}