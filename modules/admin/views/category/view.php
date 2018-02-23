<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if($goods != 0){ ?>
        <div class="alert alert-danger" role="alert">
            <p>This category has <?php echo $goods; ?> good[s]</p>
        </div>
    <?php } ?>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'action' => 'delete'],  [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'You sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'parent_id',
            'title',
            'description',
            'seo_text:ntext',
        ],
    ]) ?>

</div>
