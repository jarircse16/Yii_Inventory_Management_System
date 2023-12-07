<?php

namespace app\controllers;

use app\models\LoginForm; // Import the LoginForm model
use app\models\User; // Import the User model
use yii\web\Controller;
use Yii;
use yii\filters\AccessControl;

class AdminController extends Controller
{
  public function behaviors()
  {
      return [
          'access' => [
              'class' => AccessControl::class,
              'rules' => [
                  [
                      'allow' => true,
                      'roles' => ['admin'],
                  ],
              ],
          ],
      ];
  }


    public function actionLogin()
        {
            $model = new LoginForm();

            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->goBack();
            }

            $model->password = '';
            return $this->render('admin/login', [
                'model' => $model,
            ]);
        }

    // Dashboard action for the admin
    public function actionDashboard()
    {
        return $this->render('dashboard');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    // User management actions
    public function actionUsers()
    {
        $users = User::find()->all();
        return $this->render('users', ['users' => $users]);
    }

    public function actionEditUser($id)
    {
        $user = User::findOne($id);
        // Handle user editing logic

        return $this->render('edit-user', ['user' => $user]);
    }

    // Other admin-related actions

    // Logout action
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
