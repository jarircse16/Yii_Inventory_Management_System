<!-- views/payment/index.php -->

<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Payments';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="payment-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Payment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'amount',
            'payment_date',
            'method',
            // Add more columns as needed
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
            ],
        ],
    ]); ?>
</div>
