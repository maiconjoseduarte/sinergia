<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ContratoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contratos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contrato-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cadastrar Contrato', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'bordered' => false,
        'hover' => true,
        'layout' => \common\components\Layout::GRID_LAYOUT,
        'columns' => [
            [
                'class' => 'kartik\grid\ActionColumn',
                'dropdown' => true,
                'dropdownOptions' => ['class' => ''],
                'dropdownButton' => ['class'=> '', 'label' =>'', 'caret' => '<span class="caret"></span>'],
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'view' => function ($url) {
                        return '<li>'.Html::a('<span class="glyphicon glyphicon-eye-open"></span> Visualizar', $url, [
                                'title' => 'Exibir',
                            ]).'</li>';
                    },
                    'update' => function ($url) {
                        return '<li>'.Html::a('<span class="glyphicon glyphicon-pencil"></span> Editar', $url, [
                                'title' => 'Editar',
                            ]).'</li>';
                    },
                ],
                'urlCreator' => function ($action, $model) {
                    if ($action === 'view') {
                        return Url::to(['view', 'id' => $model->id]);

                    } elseif ($action === 'update') {
                        return Url::to(['update', 'id' => $model->id]);

                    } elseif ($action === 'delete') {
                        return Url::to(['delete', 'id' => $model->id]);

                    }
                },
            ],
            'id',
            'idGrupo',
            'dataInicio',
            'totalReceitaLiquidaInicio',
            'margemBrutaPonderada',
            //'dataUltimaRenovacao',
            //'vencimento',
            //'reajustePonderado',
            //'margemBrutaPonderadaRenovacao',
            //'totalReceitaLiquidaRenovacao',
            //'condicaoPagamento',
            //'minimo',
            //'numeroLeitos',
            //'tabela',
            //'icms',
            //'enquadramento',
            //'nomeGestor',

        ],
    ]); ?>


</div>
