<?php

// app/controllers/UserController.php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;


class UserController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
            'pagination' => [
                'pageSize' => 10, // Adjust as needed
            ],
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }
      public function actionCreateAdmin()
      {
      $newAdmin = new User();

      $newAdmin->username = 'admin';
      $newAdmin->email = 'admin@example.com';
      $newAdmin->setPassword('your_password');
      $newAdmin->generateAuthKey();

      $auth = Yii::$app->authManager;
      $adminRole = $auth->getRole('admin');
      $auth->assign($adminRole, $newAdmin->id);

      if ($newAdmin->save()) {
          echo 'Admin user added successfully.';
      } else {
          print_r($newAdmin->errors);
      }
    }


        /**
     * Finds an identity by the given ID.
     *
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

        /**
     * Finds an identity by the given token.
     *
     * @param mixed $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'User created successfully.');
            return $this->redirect(['index']);
        }

        return $this->render('create', ['model' => $model]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'User updated successfully.');
            return $this->redirect(['index']);
        }

        return $this->render('update', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        Yii::$app->session->setFlash('success', 'User deleted successfully.');
        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
