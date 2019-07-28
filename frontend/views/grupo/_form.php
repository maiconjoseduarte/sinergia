<?php

use frontend\models\Colaborador;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Grupo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grupo-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'status')->dropDownList(\frontend\models\Grupo::$OPCOES_STATUS) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'idGestor')->widget(\kartik\select2\Select2::className(), [
                'data' => Colaborador::select2Data(Colaborador::GESTOR),
                'options' => ['placeholder' => 'Select a state ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'idSuporte')->widget(\kartik\select2\Select2::className(), [
                'data' => Colaborador::select2Data(Colaborador::SUPORTE),
                'options' => ['placeholder' => 'Select a state ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
