<!-- views/item/index.php -->

<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;

?>

<!-- views/item/index.php -->

<div class="item-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'name',
            'description',
            'price',
            // Add more columns as needed
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
            ],
        ],
    ]); ?>
</div>
