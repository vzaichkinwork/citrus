<?php
    use yii\helpers\Html;
    use  yii\helpers\Url;
?>

    <div class="admin-default-index">
        <h1>Категории</h1>
        <ul>
            <?php foreach ($categories as $category): ?>
                <?php if (!isset($category->parent_id)) { ?>
                    <li>
                        <a href="<?php echo Url::to(['category/view', 'id'=>$category->id]); ?>"><?php echo Html::encode("{$category->description}"); ?></a>
                    </li>
                <?php } ?>
                <?php foreach ($categories as $sub_category): ?>
                    <?php if ($category->id == $sub_category->parent_id) {?>
                        <ul>
                            <li>
                                <a href="<?php echo Url::to(['category/view', 'id'=>$sub_category->id]); ?>"><?php echo Html::encode("{$sub_category->description}"); ?></a>
                            </li>
                        </ul>
                    <?php } ?>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </ul>
    </div>
