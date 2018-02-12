<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Goods;

class GoodsController extends Controller
{
    public function actionView($id)
    {
        $current_item = Goods::find()->where(['id'=>$id])->one();

        $queryGoods = Goods::find();

        $goods =$queryGoods->orderBy('title')->all();

        return $this->render('view', [
            'goods' => $goods,
            'current_category' => $current_item,
            'id' => $id,
        ]);
    }
}
