<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Vehiculo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehiculo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kilometraje')->textInput() ?>

    <?= $form->field($model, 'precio')->textInput() ?>

    <?= $form->field($model, 'idmodelo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
