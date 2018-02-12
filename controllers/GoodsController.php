<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Goods;

class GoodsController extends Controller
{
    public function actionGoods() {

        $query = Goods::find();

        $goods =$query->orderBy('title')->all();

        return $this->render('goods', [
            'goods' => $goods
        ]);
    }
}
