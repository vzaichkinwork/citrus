<?php

namespace app\controllers;

use yii\data\Pagination;
use app\models\Category;
use app\models\Goods;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Category::find();
        $pagination = new Pagination([
            'defaultPageSize' => 4,
            'totalCount' => $query->count(),
        ]);
        $categories = $query->orderBy('title')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('category', [
            'categories' => $categories,
            'pagination' => $pagination,
        ]);
    }

    public function actionPersonalVehicles()
    {
        $query = Goods::find();

        $goods =$query->orderBy('title')->all();

        return $this->render('personal-vehicles', [
            'goods' => $goods
        ]);
    }

    public function actionFitnessAndHealth()
    {
        $query = Goods::find();

        $goods =$query->orderBy('title')->all();

        return $this->render('fitness-and-health', [
            'goods' => $goods
        ]);
    }

    public function actionPhotoAndVideo()
    {
        $query = Goods::find();

        $goods =$query->orderBy('title')->all();

        return $this->render('photo-and-video', [
            'goods' => $goods
        ]);
    }

    public function actionSmartHome()
    {
        $query = Goods::find();

        $goods =$query->orderBy('title')->all();

        return $this->render('smart-home', [
            'goods' => $goods
        ]);
    }

    public function actionEntertainment()
    {
        $query = Goods::find();

        $goods =$query->orderBy('title')->all();

        return $this->render('entertainment', [
            'goods' => $goods
        ]);
    }
}
