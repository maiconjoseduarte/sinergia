<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Contrato */

$this->title = 'Novo Contrato';
$this->params['breadcrumbs'][] = ['label' => 'Contratos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box">

    <div class="box-header">
        <h2><?= Html::encode($this->title) ?></h2>
    </div>

    <div class="box-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>>
