<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dealer */

$this->title = $model->id_dealer;
$this->params['breadcrumbs'][] = ['label' => 'Dealers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dealer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_dealer], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_dealer], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_dealer',
            'Nombre',
            'Apellido',
            'Telefono',
            'Correo',
        ],
    ]) ?>

</div>
