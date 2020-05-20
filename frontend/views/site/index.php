<?php

use frontend\assets\SiteBundle;

/**
 * @var $data
 */
SiteBundle::register($this);

$this->title = 'Тестовое задание';
?>

<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-sm-12" style="margin-bottom: 12px">
                <button id="CreateUser" class="btn btn-primary">+</button>
                <button id="CreateRandomUser" class="btn btn-primary">Добавить случайного</button>
            </div>
        </div>
        <div id="user_table" class="row">
        </div>
    </div>

</div>
