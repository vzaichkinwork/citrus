<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Товар';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
    <?php foreach ($goods as $good): ?>
        <p class="card-text">
            <?= Html::encode("{$good->title}") ?>
        </p>
    <img data-src="holder.js/100px280/thumb" alt="100%x280" style="height: 280px; width: 20%; display: block;" src="https://cdn1.citrus.ua/upload/new_iblock/e4c/589aa5103ba9f7ebef07c07c95e521f2.jpg" data-holder-rendered="true">
    <p class="card-text">
        <?= Html::encode("{$good->description}") ?>
    </p>
    <?php endforeach; ?>
</div>
