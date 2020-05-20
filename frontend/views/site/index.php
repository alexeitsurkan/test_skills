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
                <button id="CreateUser" class="btn btn-primary" title="Добавить пользователя"><i class="fas fa-plus"></i></button>
                <button id="CreateRandomUser" class="btn btn-primary" title="Добавить случайного пользователя">Добавить случайного</button>
                <button id="CreateSkill" class="btn btn-success" title="Добавить навык"><i class="fas fa-plus"></i> <b>Навык</b></button>
                <button id="CreateCity" class="btn btn-danger" title="Добавить город"><i class="fas fa-plus"></i> <b>Город</b></button>
            </div>
        </div>
        <div id="user_table" class="row">
        </div>
    </div>

</div>
