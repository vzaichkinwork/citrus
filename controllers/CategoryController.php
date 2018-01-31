<?php
/**
 * Displays category page.
 *
 */

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Category;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        $query = Category::find();

        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
        ]);

        $categories = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'categories' => $categories,
            'pagination' => $pagination,
        ]);
    }
}