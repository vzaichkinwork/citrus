<?php

namespace app\controllers;

use Yii;
use yii\data\Pagination;
use app\models\Category;
use app\models\Goods;
use yii\web\NotFoundHttpException;

class CategoryController extends \yii\web\Controller
{
    public function actionView($category)
    {
        $current_category = Category::find()->where(['title'=>$category])->one();

        $queryGoods = Goods::find();

        $goods =$queryGoods->orderBy('title')->all();

        return $this->render('view', [
            'goods' => $goods,
            'current_category' => $current_category,
        ]);
    }
}
