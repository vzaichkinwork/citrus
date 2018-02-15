<?php

namespace app\modules\admin;

use yii\filters\AccessControl;

/**
 * admin module definition class
 */
class Admin extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    public $layout = 'main';

    //public $defaultRoute = 'admin/views/default/index';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
        //\Yii::configure($this, require __DIR__ . '/config.php');

    }
}
