<?php

use frontend\models\Colaborador;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\GrupoSearch */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="grupo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'id') ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'nome') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'status')->dropDownList(\frontend\models\Grupo::$OPCOES_STATUS, ['prompt' => 'Todos']) ?>
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
        <div class="col-md-3">
            <?= $form->field($model, 'pageSize')->dropDownList(\frontend\models\GrupoSearch::$OPCOES_PAGINACAO) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Filtar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
        <?= Html::a('Cadastrar novo', ['create'], ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
