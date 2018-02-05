<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;

?>
    <h1>Категории</h1>
    <ul>
        <?php foreach ($categories as $category): ?>
            <li>
                <a href=""><?php echo Html::encode("{$category->description}"); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>