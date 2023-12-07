<!-- views/category/delete.php -->

<?php

use yii\helpers\Html;

$this->title = 'Delete Category';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="category-delete">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Are you sure you want to delete this category?</p>

    <p>
        <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this category?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
