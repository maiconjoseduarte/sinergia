<?php

use yii\helpers\Html;
use common\components\Layout;
use kartik\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GrupoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grupos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="d-sm-flex justify-content-between align-items-center my-3">
    <h3 class="text-dark font-weight-medium"><?= $this->title ?></h3>
    <div class="link-btn-group d-flex justify-content-start align-items-start">
        <?= Html::a(\common\components\Icones::ADD. ' Cadastrar novo', ['create'], ['class' => Layout::BTN_CADASTRAR]) ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

            <?php echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'bordered' => false,
                'hover' => true,
                'layout' => Layout::GRID_LAYOUT,
                'columns' => [
//                        ['class' => 'yii\grid\ActionColumn'],
                    [
                        'class' => 'kartik\grid\ActionColumn',
                        'dropdown' => true,
                        'dropdownOptions' => ['class' => ''],
                        'dropdownButton' => ['class'=> '', 'label' =>'', 'caret' => ''],
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
                        'attribute' => 'id',
                        'vAlign' => 'middle',
                    ],
                    [
                        'attribute' => 'nome',
                        'vAlign' => 'middle',
                    ],
                    [
                        'attribute' => 'status',
                        'vAlign' => 'middle',
                        'value' => function ($model) {
                            /** @var \frontend\models\Grupo $model */
                            return \frontend\models\Grupo::$OPCOES_STATUS[$model->status];
                        }
                    ],
                    [
                        'attribute' => 'idGestor',
                        'vAlign' => 'middle',
                        'value' => function ($model) {
                            /** @var \frontend\models\Grupo $model */
                            return $model->gestor->nome ?? '';
                        }
                    ],
                    [
                        'attribute' => 'idSuporte',
                        'vAlign' => 'middle',
                        'value' => function ($model) {
                            /** @var \frontend\models\Grupo $model */
                            return $model->suporte->nome ?? '';
                        }
                    ],
                ],
            ]); ?>

            </div>
        </div>
    </div>
</div>