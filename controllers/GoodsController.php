<?php

namespace app\controllers;

use app\models\Goods;

class GoodsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $goods = Goods::find()->orderBy('title')->all();

        return $this->render('index', [
            'goods' => $goods
        ]);
    }

}
