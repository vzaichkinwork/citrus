<?php
/**
 * Displays categories page.
 *
 */

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Categories;

class CategoriesController extends Controller
{
    public function actionIndex()
    {
        $query = Categories::find();

        $pagination = new Pagination([
            'defaultPageSize' => 4,
            'totalCount' => $query->count(),
        ]);

        $categories = $query->orderBy('title')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'categories' => $categories,
            'pagination' => $pagination,
        ]);
    }
}