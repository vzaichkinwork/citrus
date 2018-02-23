<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Goods;
use app\modules\admin\models\GoodsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\imagine\Image;
use Imagine\Image\Box;

/**
 * GoodsController implements the CRUD actions for Goods model.
 */
class GoodsController extends Controller
{
    public $thumb_width = 50;
    public $thumb_height = 50;
    public $resize_width = 120;
    public $resize_height = 120;

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Goods models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GoodsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Goods model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Goods model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Goods();

        $this->handleGoodsSave($model);

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Goods model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $this->handleGoodsSave($model);

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Saves and processing images for Goods model.
     */
    protected function handleGoodsSave(Goods $model)
    {
        if ($model->load(Yii::$app->request->post())) {
            $model->upload = UploadedFile::getInstance($model, 'upload');

            if ($model->validate()) {
                if ($model->upload) {
                    $image_name = $model->upload->baseName . '.' . $model->upload->extension;
                    $filePath = 'uploads/' . $image_name;
                    if ($model->upload->saveAs($filePath)) {
                        $model->image = $image_name;

                        $thumb = "thumb_" . $image_name;
                        Image::thumbnail($filePath, $this->thumb_width, $this->thumb_height)
                            ->save(Yii::getAlias('@webroot/uploads/' . $thumb), ['quality' => 80]);

                        $resized = "resized_" . $image_name;
                        Image::getImagine()->open($filePath)->thumbnail(new Box($this->resize_width, $this->resize_height))
                            ->save(Yii::getAlias('@webroot/uploads/' . $resized) , ['quality' => 90]);
                    }
                }

                if ($model->save(false)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        }
    }

    /**
     * Deletes an existing Goods model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        $filePath = Yii::getAlias('@webroot/uploads/');

        $model->delete();
        unlink($filePath ."thumb_" . $model->image);
        unlink($filePath . "resized_" . $model->image);
        unlink($filePath . $model->image);

        return $this->redirect(['index']);
    }

    /**
     * Finds the Goods model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Goods the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Goods::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
