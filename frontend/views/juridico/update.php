<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Juridico */

$this->title = 'Update Juridico: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Juridicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="juridico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
