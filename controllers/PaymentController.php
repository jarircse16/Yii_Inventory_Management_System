<?php
// app/controllers/PaymentController.php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Payment;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;

class PaymentController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Payment::find(),
            'pagination' => [
                'pageSize' => 10, // Adjust as needed
            ],
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionCreate()
    {
        $model = new Payment();

        if ($model->load(Yii::$app->request->post())) {
            var_dump($model->attributes); // Debugging statement
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Payment created successfully.');
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', ['model' => $model]);
    }


    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Payment updated successfully.');
            return $this->redirect(['index']);
        }

        return $this->render('update', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        Yii::$app->session->setFlash('success', 'Payment deleted successfully.');
        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Payment::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
