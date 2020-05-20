<?php namespace frontend\assets;

class SkillFormBundle extends AppAsset
{
    public $js = [
        'js/skill/form.js'
    ];

    public function __construct() {
        parent::__construct();
        foreach ($this->js as $k => $v) {
            $this->js[$k] = $v . "?m=" . strval(rand(10000, 99999));
        }
    }
}
