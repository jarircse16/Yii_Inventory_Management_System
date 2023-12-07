<!-- views/item/delete.php -->

<?php

use yii\helpers\Html;

$this->title = 'Delete Item';
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="item-delete">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Are you sure you want to delete this item?</p>

    <p>
        <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
