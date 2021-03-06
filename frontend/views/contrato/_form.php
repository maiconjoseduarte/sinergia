<?php

use kartik\datecontrol\DateControl;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Contrato */
/* @var $form yii\widgets\ActiveForm */

$data = \frontend\models\Grupo::select2Data();

?>

<div class="contrato-form">

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
            <?= $form->field($model, 'margemBrutaPonderada')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'totalReceitaLiquidaInicio')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'reajustePonderado')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'margemBrutaPonderadaRenovacao')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'totalReceitaLiquidaRenovacao')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'condicaoPagamento')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'minimo')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'numeroLeitos')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'tabela')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'icms')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'enquadramento')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'nomeGestor')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
