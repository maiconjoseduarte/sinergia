<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AdminAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AdminAsset::register($this);
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
<body class="sidebar-light">
<?php $this->beginBody() ?>

<?php //echo Alert::widget() ?>
<?php //echo $content ?>

<div class="container-scroller">

    <?php require 'top.php'; ?>

    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close mdi mdi-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                <div class="sidebar-bg-options selected" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles primary"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <?php require 'left.php'; ?>
<!--        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper p-0">

                <div class="d-sm-flex justify-content-between align-items-center border-bottom">
                    <div class="d-flex align-items-center">

                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>

                    </div>
                    <div class="mr-3 pr-1 ml-3 pl-1 mb-3 mb-lg-0">
<!--                        --><?php //Breadcrumbs::widget([
//                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//                        ]) ?>
<!--                        <div class="dropdown">-->
<!--                            <button type="button" class="btn btn-outline-light btn-icon-text dropdown-toggle" data-toggle="dropdown" id="profileDropdown3" aria-expanded="false">-->
<!--                                <i class="mdi mdi-calendar-blank btn-icon-prepend"></i>-->
<!--                                Last 30 days-->
<!--                            </button>-->
<!--                            <div class="dropdown-menu dropdown-menu-left custom-drop-down" aria-labelledby="profileDropdown3">-->
<!--                                <a class="dropdown-item">-->
<!--                                    <i class="mdi mdi-calendar-blank"></i> Last 2 weeks-->
<!--                                </a>-->
<!--                                <a class="dropdown-item">-->
<!--                                    <i class="mdi mdi-calendar-blank"></i> Last 7 days-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>

                </div>
                <div class="tab-content home-tab-content">
<!--                    <div class="tab-pane fade show active" id="Dashboards-1" role="tabpanel" aria-labelledby="Dashboards-tab">-->
                        <?= Alert::widget() ?>
                        <?= $content; ?>
<!--                    </div>-->
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="justify-content-center justify-content-sm-between">
                    <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019. All rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
