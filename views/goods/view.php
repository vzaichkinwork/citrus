<?php
    /* @var $this yii\web\View */
    use yii\helpers\Html;

    $this->title = $current_item['title'];
    $this->params['breadcrumbs'][] = $this->title;

    var_dump($current_item);

?>

    <div class="card">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <p class="card-text">
                            <?= Html::encode("{$current_item['title']}") ?>
                        </p>
                        <img class="card-img-top"
                             style="height: 225px; width: 100%; display: block;"
                             src="<?= $current_item['image_url'] ?>" >
                        <div class="card-body">
                            <p class="card-text">
                                <?= Html::encode("{$current_item['description']}") ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
