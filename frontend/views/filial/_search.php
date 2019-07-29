<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\FilialSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="filial-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'idGrupo') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'nome') ?>

        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'pageSize')->dropDownList(\frontend\models\FilialSearch::$OPCOES_PAGINACAO) ?>
        </div>

    </div>

    <div class="form-group">
        <?= Html::submitButton('Filtrar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
        <?= Html::a('Cadastrar novo', ['create'], ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
