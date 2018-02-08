<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use app\assets\AppAsset;

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
<body>
<?php $this->beginBody() ?>
<div class="container">
    <table>
        <tr>
            <div class="row topmenu">
                <div class="col-xs-4" id="citrus_top_menu">
                    <?php
                    Menu::begin([
                        'options' => [
                            'class' => 'navbar-inverse navbar-fixed-top',
                        ],
                    ]);
                    echo Menu::widget([
                        'items' => [
                            ['label' => 'Главная', 'url' => ['site/index']],
                            ['label' => 'О компании', 'url' => ['site/about']],
                            ['label' => 'Услуги', 'url' => ['site/services']],
                            ['label' => 'Контакты', 'url' => ['site/contacts']],
                        ],
                    ]);
                    ?>
                </div>
        </tr>
        <tr>
            <div class="wrap">
                <?php
                NavBar::begin([
                    'options' => [
                        'class' => 'navbar-inverse navbar-toggle',
                    ],
                ]);
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-center'],
                    'items' => [

                        ['label' => 'Персональный транспорт', 'url' => ['category/personal-vehicles']],
                        ['label' => 'Фитнес и здоровье', 'url' => ['category/fitness-and-health']],
                        ['label' => 'Фото и видео', 'url' => ['category/photo-and-video']],
                        ['label' => 'Умный дом', 'url' => ['category/smart-home']],
                        ['label' => 'Развлечения', 'url' => ['promopages/entertainment']],
                        ['label' => 'Селфи-стики', 'url' => ['shop/goods/monopods-and-selfie-sticks']],
                        ['label' => 'Батареи', 'url' => ['shop/goods/portativnye-batarei']],
                        ['label' => 'Подарки', 'url' => ['promo/presents']],
                        ['label' => 'Sale', 'url' => ['sale/']],
                        /*['label' => 'Компания', 'url' => ['/site/about']],
                        ['label' => 'Contact', 'url' => ['/site/contact']],
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
                        )*/
                    ],
                ]);
                NavBar::end();
                ?>
        </tr>
    </table>




    <div class="container">
        <?= Breadcrumbs::widget([
            'homeLink'=> ['label' => 'Главная', 'url' => ['/site/index']],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Citrus <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
