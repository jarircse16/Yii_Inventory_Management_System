<?php

namespace app\controllers;
use yii\web\Controller;
use Yii;
use app\models\Item;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;

class ItemController extends Controller
{
  public function actionIndex()
  {
      $dataProvider = new ActiveDataProvider([
          'query' => Item::find(),
      ]);

      return $this->render('index', ['dataProvider' => $dataProvider]);
  }

  public function actionCreate()
  {
      $model = new Item();

      if ($model->load(Yii::$app->request->post()) && $model->save()) {
          Yii::$app->session->setFlash('success', 'Item created successfully.');
          return $this->redirect(['index']);
      }

      return $this->render('create', ['model' => $model]);
  }


    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Item updated successfully.');
            return $this->redirect(['index']);
        }

        return $this->render('update', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        Yii::$app->session->setFlash('success', 'Item deleted successfully.');
        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Item::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
