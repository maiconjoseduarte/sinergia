<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Juridico */

$this->title = 'Create Juridico';
$this->params['breadcrumbs'][] = ['label' => 'Juridicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="juridico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
