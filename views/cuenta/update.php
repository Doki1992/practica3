<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cuenta */

$this->title = 'Update Cuenta: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Cuentas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idCuenta, 'url' => ['view', 'id' => $model->idCuenta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cuenta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
