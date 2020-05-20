<?php namespace frontend\assets;


class UserFormBundle extends AppAsset
{
    public $js = [
        'js/user/form.js'
    ];
    public $depends = [
        DualListboxBundle::class
    ];

    public function __construct() {
        parent::__construct();
        foreach ($this->js as $k => $v) {
            $this->js[$k] = $v . "?m=" . strval(rand(10000, 99999));
        }
    }
}
