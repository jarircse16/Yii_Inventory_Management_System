<!-- views/admin/edit-user.php -->

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Edit User: ' . Html::encode($user->username);
$this->params['breadcrumbs'][] = ['label' => 'User Management', 'url' => ['users']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="user-edit">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($user, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($user, 'email')->textInput(['maxlength' => true]) ?>

    <!-- Add more fields as needed, e.g., password, role, etc. -->

    <div class="form-group">
        <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
