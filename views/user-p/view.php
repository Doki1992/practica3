<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UserP */

$this->title = $model->idUserP;
$this->params['breadcrumbs'][] = ['label' => 'User Ps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-p-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idUserP], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idUserP], [
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
            'idUserP',
            'username',
            'password',
            'authKey',
            'mail',
            'alias',
        ],
    ]) ?>

</div>
