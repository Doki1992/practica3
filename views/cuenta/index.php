<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CuentaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cuentas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuenta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cuenta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idCuenta',
            'Saldo',
            'IdUser',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
