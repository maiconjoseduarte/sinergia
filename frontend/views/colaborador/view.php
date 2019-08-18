<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Colaborador */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Colaboradors', 'url' => ['index']];
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
                'nome',
                [
                    'attribute' => 'cargo',
                    'value' => function ($model) {
                        /** @var \frontend\models\Colaborador $model */
                        return \frontend\models\Colaborador::$OPCOES_CARGO[$model->cargo];
                    }
                ],
            ],
        ]) ?>
    </div>
</div>
