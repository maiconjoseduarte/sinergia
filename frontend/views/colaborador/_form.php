<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Colaborador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="colaborador-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'cargo')->dropDownList(\frontend\models\Colaborador::$OPCOES_CARGO) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
