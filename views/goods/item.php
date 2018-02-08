<?php
    /* @var $this yii\web\View */
    use yii\helpers\Html;

    $this->title = 'Товар';
    $this->params['breadcrumbs'][] = $this->title;
?>

    <div class="card">
        <div class="container">
            <div class="row">
                <?php foreach ($goods as $good): ?>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <p class="card-text">
                                <?= Html::encode("{$good->title}") ?>
                            </p>
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?= $good->image_url ?>" data-holder-rendered="true">
                            <div class="card-body">
                                <p class="card-text"><?= Html::encode("{$good->description}") ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
