<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Filial */

$this->title = 'Novo Filial';
$this->params['breadcrumbs'][] = ['label' => 'Filial', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
