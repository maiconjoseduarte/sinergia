<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Filial */
/* @var $form yii\widgets\ActiveForm */


$data = \frontend\models\Grupo::select2Data();

?>

<div class="filial-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'id')->textInput() ?>
        </div>
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
            <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'codIsoWeb')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'documento')->widget(\yii\widgets\MaskedInput::className(), [
                'mask' => '99.999.999/999-99'
            ]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'uf')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'especialidade')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'codResponsavel')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'codSuporte')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'icms')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'cdFaturamento')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'ledTime')->textInput() ?>
        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
