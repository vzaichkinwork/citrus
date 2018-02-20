<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Goods;
use app\models\Category;

class GoodsController extends Controller
{
    public function actionView($category, $id)
    {
        $current_category = Category::find()->where(['id'=>$category])->orWhere(['title'=>$category])->one();

        $current_item = Goods::find()->where(['id'=>$id])->one();

        $queryGoods = Goods::find();

        $goods =$queryGoods->orderBy('title')->all();

        return $this->render('view', [
            'goods' => $goods,
            'current_item' => $current_item,
            'current_category' => $current_category,
            'id' => $id,
        ]);
    }
}

