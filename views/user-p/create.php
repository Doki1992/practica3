<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserP */

$this->title = 'Create User P';
$this->params['breadcrumbs'][] = ['label' => 'User Ps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-p-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
