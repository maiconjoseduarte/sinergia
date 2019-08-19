<?php

use common\components\Layout;
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;

/* @var array|null $processamentos */
/* @var string $titulo */
/* @var string $estiloBox */

if (count($processamentos) == 0) {
    return null;
}
?>

<div class="box <?= $estiloBox; ?>">
    <div class="box-header">
        <i class="fa fa-asterisk"></i>
        <h3 class="box-title"><strong><?= $titulo ?></strong></h3>
    </div>
    <div class="box-body">
        <?= GridView::widget([
            'dataProvider' => new ArrayDataProvider([
                'allModels' => $processamentos,
                'pagination' => [
                    'pageSize' => false,
                ],
            ]),
            'layout' => '{items}',
            'toolbar' => null,
            'hover' => Layout::GRID_HOVER,
            'striped' => Layout::GRID_STRIPED,
            'columns' => [
                [
                    'label' => 'Linha do arquivo',
                    'format' => 'raw',
                    'attribute' => 'linha'
                ],
                [
                    'label' => 'Mensagem',
                    'format' => 'raw',
                    'attribute' => 'mensagem'
                ]
            ],
            'pjax' => Layout::GRID_PAJAX,
            'responsive' => Layout::GRID_RESPONSIVE,
            'responsiveWrap' => Layout::GRID_RESPONSIVE_WRAP,
            'bordered' => Layout::GRID_BORDERED,
            'condensed' => Layout::GRID_CONDENSED
        ]); ?>
    </div>
</div>
