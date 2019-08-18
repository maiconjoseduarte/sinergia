<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Contrato */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contratos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="box">

    <div class="box-header">
        <h2><?= Html::encode($this->title) ?></h2>
    </div>

    <div class="box-body">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'idGrupo',
                'dataInicio',
                'totalReceitaLiquidaInicio',
                'margemBrutaPonderada',
                'dataUltimaRenovacao',
                'vencimento',
                'reajustePonderado',
                'margemBrutaPonderadaRenovacao',
                'totalReceitaLiquidaRenovacao',
                'condicaoPagamento',
                'minimo',
                'numeroLeitos',
                'tabela',
                'icms',
                'enquadramento',
                'nomeGestor',
                'create_at',
                'update_at',
            ],
        ]) ?>
    </div>
</div>
