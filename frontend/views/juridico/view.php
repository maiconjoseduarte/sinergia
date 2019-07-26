<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Juridico */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Juridicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="juridico-view">

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
            'status',
            'dataInicio',
            'dataUltimaRenovacao',
            'vencimento',
            'multa',
            'juros',
            'minutaAditivo',
            'statusAtual',
            'comentario',
            'nomeResponsavel',
            'email:email',
            'telefone',
            'create_at',
            'update_at',
        ],
    ]) ?>

</div>
