<?php namespace frontend\assets;

class SiteBundle extends AppAsset
{
    public $js = [
        'js/site/index.js'
    ];
    public $depends = [
        DataTableBundle::class,
        BootboxBundle::class,
    ];
}
