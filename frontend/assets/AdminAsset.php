<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/admin';
    public $css = [
        'css/materialdesignicons.min.css',
//        'css/vendor.bundle.base.css',
        'css/styleDefault.css',
        'css/style.css',
    ];

    public $js = [
//        'js/vendor.bundle.base.js',
//        'js/Chart.min.js',
        'js/off-canvas.js', // menu celular
//        'js/hoverable-collapse.js',
        'js/template.js',
//        'js/settings.js',
//        'js/todolist.js',
//        'js/dashboard.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}