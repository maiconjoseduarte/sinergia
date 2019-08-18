<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\MasterAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

MasterAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">

    <?php require 'top.php'; ?>
    <?php require 'left.php'; ?>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <?= $this->title; ?>
            </h1>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </section>

        <section class="content">

            <?php echo Alert::widget() ?>
            <?php echo $content ?>

        </section>

    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Desenvolvido por:</b>  Maicon José Duarte
        </div>
        <strong><?= Html::encode(Yii::$app->name) ?> : <?= date('Y') ?> </strong>
    </footer>

    <?php require 'right.php'; ?>

    <div class="control-sidebar-bg"></div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
