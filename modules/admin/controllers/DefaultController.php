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

        $parents = [];
        $parentsChild = [];

        $categories = Category::find()->all();

        foreach ($categories as $id => $category) {
            $parents[$id]['id'] = $category['id'];
            $parents[$id]['parent_id'] = $category['parent_id'];
        }

        foreach ($parents as $key => $value) {

            $isMain = false;

            if ($value['parent_id'] == null) {
                $isMain = true;
            }

            if ($isMain) {
                $parentsChild[$key] = $value;
            }
        }

        return $this->render('index', [
            //'categories' => $categories,
            'parents' => $parents,
            'parentsChild' => $parentsChild,
        ]);
    }
}

/*SELECT * FROM `category` WHERE id = 8
OR parent_id = 8
OR id = (SELECT parent_id FROM `category` p2
         WHERE id = 8)
OR parent_id = (SELECT parent_id FROM `category` p2
         WHERE id = 8)*/