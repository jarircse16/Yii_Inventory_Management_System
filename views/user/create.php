<!-- views/user/create.php -->

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Create User';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="user-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <!-- Add more fields as needed -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success'])
        // In your controller actions
        Yii::$app->session->setFlash('success', 'User created successfully.'); ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
