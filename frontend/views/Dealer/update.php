<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dealer */

$this->title = 'Update Dealer: ' . $model->id_dealer;
$this->params['breadcrumbs'][] = ['label' => 'Dealers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dealer, 'url' => ['view', 'id' => $model->id_dealer]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dealer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
