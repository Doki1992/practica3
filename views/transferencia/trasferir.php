<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Hacer transferencia</h1>

<?php
$form = ActiveForm::begin([
    'id' => 'trasferir-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>

<?= $form->field($cuenta, 'cantidad')->textInput() ?>
<?= $form->field($cuenta, 'cuenta')->textInput() ?>
  <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
  </div>
<?php ActiveForm::end();?>


