<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Интернет-магазин Магаз - гаджеты и аксессуары.';

?>
<body bgcolor="white" style="background-image: url(&quot;//cdn1.citrus.ua/upload/iblock/71d/branding-new-year-2018.jpg&quot;) !important;
background-position: 50% 0px !important;
background-repeat: no-repeat !important;
background-color: rgb(239, 239, 239) !important; cursor: default;">

<div class="site-index">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Heading</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
            <p>
                <a href="#" class="btn btn-primary">Main call to action</a>
                <a href="#" class="btn btn-secondary">Secondary action</a>
            </p>
        </div>
    </section>
    <div class="card">
        <div class="container">
            <div class="row">
                <?php foreach ($goods as $item): ?>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <p class="card-text">
                                <?= Html::encode("{$item->title}") ?>
                            </p>
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="../uploads/<?= $item->image ?>" data-holder-rendered="true">
                            <img src="../uploads/thumb_<?= $item->image ?>">
                            <div class="card-body">
                                <a href="<?php echo $url = Url::to(['goods/view', 'category'=>$item->category_id, 'id'=>$item->id]); ?>"><p class="card-text"><?= Html::encode("{$item->description}") ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


