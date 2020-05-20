<?php namespace frontend\assets;

use yii\web\AssetBundle;

class BootboxBundle extends AssetBundle
{
    public $sourcePath = '@app/../node_modules/';

    public $js = [
        'bootbox/dist/bootbox.all.min.js',

    ];
    public $depends = [
        AppAsset::class
    ];
}
