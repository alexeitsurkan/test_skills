<?php namespace frontend\assets;

class UserBundle extends AppAsset
{
    public $js = [
        'js/user/index.js'
    ];

    public $depends = [
        SiteBundle::class,
    ];

    public function __construct() {
        parent::__construct();
        foreach ($this->js as $k => $v) {
            $this->js[$k] = $v . "?m=" . strval(rand(10000, 99999));
        }
    }
}
