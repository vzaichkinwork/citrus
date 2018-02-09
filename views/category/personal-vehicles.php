<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Персональный транспорт';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
    <div class="container">
        <div class="row">
            <?php foreach ($goods as $item):
                if ($item->category_id == '9') {?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <p class="card-text">
                            <?= Html::encode("{$item->title}") ?>
                        </p>
                            <img class="card-img-top"
                                 data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                                 alt="Thumbnail [100%x225]"
                                 style="height: 225px; width: 100%; display: block;"
                                 src="<?= $item->image_url ?>" data-holder-rendered="true">
                        <div class="card-body">
                            <a href="<?php echo $url = Url::to([CATEGORY_URL . "название категории.". "id товара"]); ?>"><p class="card-text"><?= Html::encode("{$item->description}") ?></p></a>
                        </div>
                    </div>
                </div>
                <?php }?>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php

echo '<pre>';
print_r($_);
echo '</pre>';

