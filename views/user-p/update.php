<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserP */

$this->title = 'Update User P: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'User Ps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idUserP, 'url' => ['view', 'id' => $model->idUserP]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-p-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
