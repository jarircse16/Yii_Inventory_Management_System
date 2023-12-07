<!-- views/user/delete.php -->

<?php

use yii\helpers\Html;

$this->title = 'Delete User';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="user-delete">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Are you sure you want to delete this user?</p>

    <p>
        <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this user?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
