<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Goods;

class GoodsController extends Controller
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
