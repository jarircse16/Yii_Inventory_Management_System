<!-- views/payment/delete.php -->

<?php

use yii\helpers\Html;

$this->title = 'Delete Payment';
$this->params['breadcrumbs'][] = ['label' => 'Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="payment-delete">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Are you sure you want to delete this payment?</p>

    <p>
        <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this payment?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
