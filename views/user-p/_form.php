<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserP */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-p-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idUserP')->textInput() ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'authKey')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
