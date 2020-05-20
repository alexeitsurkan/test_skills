<?php namespace frontend\assets;

use yii\web\AssetBundle;

class DataTableBundle extends AssetBundle
{
    public $sourcePath = '@app/../node_modules/';

    public $css = [
        'datatables.net-dt/css/jquery.dataTables.css',
    ];
    public $js = [
        'datatables.net/js/jquery.dataTables.js',
    ];
    public $depends = [
        AppAsset::class
    ];
}
