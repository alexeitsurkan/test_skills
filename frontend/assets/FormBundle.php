<?php namespace frontend\assets;

class FormBundle extends AppAsset
{
    public $js = [
        'js/user/form.js'
    ];

    public function __construct() {
        parent::__construct();
        foreach ($this->js as $k => $v) {
            $this->js[$k] = $v . "?m=" . strval(rand(10000, 99999));
        }
    }
}
