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
<div class="box">

    <div class="box-header">
        <h2><?= Html::encode($this->title) ?></h2>
    </div>

    <div class="box-body">
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
                [
                    'attribute' => 'idGrupo',
                    'vAlign' => 'middle',
                ],
                [
                    'attribute' => 'dataInicio',
                    'vAlign' => 'middle',
                ],
                [
                    'attribute' => 'totalReceitaLiquidaInicio',
                    'vAlign' => 'middle',
                ],
                [
                    'attribute' => 'margemBrutaPonderada',
                    'vAlign' => 'middle',
                ],
            ],
        ]); ?>
    </div>
</div>
