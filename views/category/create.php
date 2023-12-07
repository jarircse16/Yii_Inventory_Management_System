<!-- views/category/create.php -->

<?php
use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Create Category';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="category-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <!-- Add more fields as needed -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <? // In your controller actions
          Yii::$app->session->setFlash('success', 'Category created successfully.');
        ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
