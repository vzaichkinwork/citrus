<?php

namespace app\controllers;

use app\models\Goods;

class GoodsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Goods::find();

        $goods =$query->orderBy('title')->all();

        return $this->render('index', [
            'goods' => $goods
        ]);
    }

}
