<!-- views/order/create.php -->

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Create Order';
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="order-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'total_amount')->textInput() ?>
    <?= $form->field($model, 'status')->dropDownList(['pending' => 'Pending', 'completed' => 'Completed']) ?>




    <div class="form-group">
        <?php echo Html::submitButton('Save', ['class' => 'btn btn-success']); ?>
    </div>


    <?php ActiveForm::end(); ?>
</div>
