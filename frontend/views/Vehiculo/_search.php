<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\VehiculoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehiculo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_vehiculo') ?>

    <?= $form->field($model, 'vin') ?>

    <?= $form->field($model, 'kilometraje') ?>

    <?= $form->field($model, 'precio') ?>

    <?= $form->field($model, 'idmodelo') ?>

    <?php // echo $form->field($model, 'id_dealer') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
