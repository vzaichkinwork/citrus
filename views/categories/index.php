<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Категории';
?>
    <h1>Categories</h1>
    <ul>
        <?php foreach ($categories as $category): ?>
            <li>
                <?= Html::encode("{$category->title}") ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>