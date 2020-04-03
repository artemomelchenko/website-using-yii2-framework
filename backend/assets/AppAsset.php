<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'plugins/fontawesome-free/css/all.min.css',
        '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
//        'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'css/adminlte.min.css',
        'plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
        'css/site.css',
    ];
    public $js = [
//        'plugins/jquery/jquery.min.js',
        'plugins/jquery-ui/jquery-ui.min.js',
//        'plugins/bootstrap/js/bootstrap.bundle.min.js',
//        'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'js/adminlte.min.js',
        'js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
