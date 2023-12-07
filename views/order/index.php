<!-- views/order/index.php -->

<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;

?>

<!-- views/order/index.php -->

<div class="order-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'customer_name',
            'total_amount',
            'status',
            // Add more columns as needed
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
            ],
        ],
    ]); ?>
</div>
