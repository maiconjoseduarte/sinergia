<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Filial */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Filials', 'url' => ['index']];
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
                [
                    'attribute' => 'idGrupo',
                    'value' => function ($model) {
                        /** @var \frontend\models\Filial $model */
                        return "{$model->idGrupo} - {$model->grupo->nome}";
                    }
                ],
                'nome',
                'codIsoWeb',
                'documento',
                'uf',
                'especialidade',
                'codResponsavel',
                'nomeResponsavel',
                'nomeSuporte',
                'icms',
                'cdFaturamento',
                'ledTime',
            ],
        ]) ?>
    </div>
</div>
