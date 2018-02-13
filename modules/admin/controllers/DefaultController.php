<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\modules\admin\models\Category;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $query = Category::find();

        $categories = $query->orderBy('title')->all();

        return $this->render('index', [
            'categories' => $categories,
        ]);
    }
}
