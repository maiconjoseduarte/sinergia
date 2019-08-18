<?php

use kartik\datecontrol\DateControl;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Juridico */
/* @var $form yii\widgets\ActiveForm */

$data = \frontend\models\Grupo::select2Data();

?>

<div class="juridico-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'idGrupo')->widget(\kartik\select2\Select2::className(), [
                'data' => $data,
                'options' => ['placeholder' => 'Select a state ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'dataInicio')->widget(DateControl::classname(), [
                'type' => DateControl::FORMAT_DATE,
                'displayFormat' => 'php: d/M/Y',
                'widgetOptions' => [
                    'pluginOptions' => [
                        'viewMode' => 0,
                        'minViewMode' => 0
                    ]
                ],
            ]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'dataUltimaRenovacao')->widget(DateControl::classname(), [
                'type' => DateControl::FORMAT_DATE,
                'displayFormat' => 'php: d/M/Y',
                'widgetOptions' => [
                    'pluginOptions' => [
                        'viewMode' => 0,
                        'minViewMode' => 0
                    ]
                ],
            ]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'vencimento')->widget(DateControl::classname(), [
                'type' => DateControl::FORMAT_DATE,
                'displayFormat' => 'php: d/M/Y',
                'widgetOptions' => [
                    'pluginOptions' => [
                        'viewMode' => 0,
                        'minViewMode' => 0
                    ]
                ],
            ]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'multa')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'juros')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'minutaAditivo')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'statusAtual')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'comentario')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'nomeResponsavel')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'email')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'telefone')->textInput() ?>
        </div>
    </div>

        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

