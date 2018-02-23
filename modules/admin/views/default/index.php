<?php
    use yii\helpers\Html;
    use  yii\helpers\Url;

    //var_dump($arr);

    echo '<pre>';
    print_r($parents);
    echo '</pre>';

    echo '-------------------------------------------------';

    echo '<pre>';
    print_r($parentsChild);
    echo '</pre>';

?>

    <div class="admin-default-index">
        <a href="<?php echo Url::to(['category/index']); ?>"><h1>Категории</h1></a>
        <!--<ul>
            <?php /*foreach ($categories as $category): */?>
                <?php /*if (!isset($category->parent_id)) { */?>
                    <li>
                        <a href="<?php /*echo Url::to(['category/view', 'id'=>$category->id]); */?>"><?php /*echo Html::encode("{$category->description}"); */?></a>
                    </li>
                <?php /*} */?>
                <?php /*foreach ($categories as $sub_category): */?>
                    <?php /*if ($category->id == $sub_category->parent_id) {*/?>
                        <ul>
                            <li>
                                <a href="<?php /*echo Url::to(['category/view', 'id'=>$sub_category->id]); */?>"><?php /*echo Html::encode("{$sub_category->description}"); */?></a>
                            </li>
                        </ul>
                    <?php /*} */?>
                <?php /*endforeach; */?>
            <?php /*endforeach; */?>
        </ul>-->
    </div>

    <div class="admin-default-index">
        <p>
            <a href="<?php echo Url::to(['goods/index']); ?>"><h1>Товары</h1></a>
        </p>
    </div>
