<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DealerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dealer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_dealer') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'Apellido') ?>

    <?= $form->field($model, 'Telefono') ?>

    <?= $form->field($model, 'Correo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
