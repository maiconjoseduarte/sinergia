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
<div class="filial-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'idGrupo',
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
            'ledTime:datetime',
            'create_at',
            'update_at',
        ],
    ]) ?>

</div>
