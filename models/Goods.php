<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "goods".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property double $price
 * @property string $image_url
 * @property integer $category_id
 * @property integer $brand_id
 *
 * @property Category $category
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'price', 'image_url', 'category_id', 'brand_id'], 'required'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['category_id', 'brand_id'], 'integer'],
            [['title'], 'string', 'max' => 200],
            [['image_url'], 'string', 'max' => 250],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'price' => 'Price',
            'image_url' => 'Image Url',
            'category_id' => 'Category ID',
            'brand_id' => 'Brand ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
