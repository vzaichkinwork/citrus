<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body class="">
<?php $this->beginBody() ?>
<div id="container">
<header class="container">
    <div class="row topmenu">
        <div class="col-xs-9" id="citrus_top_menu">
            <?php
            echo Menu::widget([
                'options' => ['class' => 'navbar-nav nav'],
                'items' => [

                    ['label' => 'Компания', 'url' => ['about']],
                    ['label' => 'Карьера', 'url' => ['about/vacancy']],
                    ['label' => 'Магазины', 'url' => ['stores-addresses']],
                    ['label' => 'Акции', 'url' => ['shares']],
                    ['label' => 'Клиентам', 'url' => ['garantiya_i_servis']],
                    ['label' => 'Поддержка', 'url' => ['support']],
                    ['label' => 'Пресс-центр', 'url' => ['news']],
                    ['label' => 'Цитрус Сервисы', 'url' => ['citrus-services']],
                    ['label' => 'ЦеХАБ', 'url' => ['hub/actions']],
                ],
            ]); ?>
        </div>
        <div class="col-xs-3 personal" id="personal-menu">
            <?php
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [

                    Yii::$app->user->isGuest ? (
                    ['label' => 'Login', 'url' => ['/site/login']]
                    ) : (
                        '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>'
                    )
                ],
            ]);
            ?>
        </div>
    </div>
    <div class="row mainline"></div>
    <div class="row">
        <div class="col-xs-12 np" id="citrus_menu">
            <?php
            echo Menu::widget([
                'options' => ['class' => 'navbar-nav nav'],
                'items' => [

                    ['label' => 'Apple', 'url' => ['apple']],
                    ['label' => 'Samsung', 'url' => ['samsung']],
                    ['label' => 'Meizu', 'url' => ['/']],
                    ['label' => 'Honor', 'url' => ['/']],
                    ['label' => 'Смартфоны', 'url' => ['/']],
                    ['label' => 'Планшеты и ультрабуки', 'url' => ['/']],
                    ['label' => 'Смарт-часы', 'url' => ['category/view', 'category' => 'smart-watches']],
                    ['label' => 'Наушники', 'url' => ['/']],
                    ['label' => 'TV', 'url' => ['/']],
                    ['label' => 'Акустика', 'url' => ['category/view', 'category' => 'acoustics']],
                    ['label' => 'Аксессуары', 'url' => ['accessories']],
                ],
            ]);
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 np" id="citrus_menu_second">
            <?php
            echo Menu::widget([
                'options' => ['class' => 'navbar-nav nav'],
                'items' => [

                    ['label' => 'Персональный транспорт', 'url' => ['category/view', 'category' => 'personal-vehicles']],
                    ['label' => 'Фитнес и здоровье', 'url' => ['category/view', 'category' => 'fitness-and-health']],
                    ['label' => 'Фото и видео', 'url' => ['category/view', 'category' => 'photo-and-video']],
                    ['label' => 'Умный дом', 'url' => ['category/view', 'category' => 'smart-home']],
                    ['label' => 'Развлечения', 'url' => ['promopages/entertainment']],
                    ['label' => 'Селфи-стики', 'url' => ['shop/goods/monopods-and-selfie-sticks']],
                    ['label' => 'Батареи', 'url' => ['shop/goods/portativnye-batarei']],
                    ['label' => 'Подарки', 'url' => ['promo/presents']],
                    ['label' => 'Sale', 'url' => ['sale/']],
                ],
            ]);
            ?>
        </div>
    </div>
</header>
</div>

    <div class="">
        <?= Breadcrumbs::widget([
            'homeLink'=> ['label' => 'Главная', 'url' => ['/site/']],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Магаз <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
