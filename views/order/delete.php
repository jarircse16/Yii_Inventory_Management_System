<!-- views/order/delete.php -->

<?php

use yii\helpers\Html;

$this->title = 'Delete Order';
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="order-delete">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Are you sure you want to delete this order?</p>

    <p>
        <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this order?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
