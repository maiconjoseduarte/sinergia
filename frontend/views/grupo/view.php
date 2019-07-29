<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Grupo */

$this->title = $model->id. ' - '. $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="d-sm-flex justify-content-between align-items-center my-3">
    <h3 class="text-dark font-weight-medium"><?= $this->title ?></h3>
    <div class="link-btn-group d-flex justify-content-start align-items-start">
    </div>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'nome',
                        'create_at',
                        'update_at',
                    ],
                ]) ?>

            </div>
        </div>
    </div>
</div>
