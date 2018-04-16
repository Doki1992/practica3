<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserPSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Ps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-p-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User P', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idUserP',
            'username',
            'password',
            'authKey',
            'mail',
            //'alias',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
