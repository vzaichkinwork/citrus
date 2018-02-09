<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;

?>

        <h1>Все категории</h1>
        <ul>
        <?php foreach ($categories as $category): ?>
                <li>
                    <a href="<?php echo $url = Url::to(['/category/' . $category->title . '']); ?>"><?php echo Html::encode("{$category->description}"); ?></a>
                </li>
        <?php echo $category->seo_text; ?>
        <?php endforeach; ?>
        </ul>

        <?= LinkPager::widget(['pagination' => $pagination]) ?>

