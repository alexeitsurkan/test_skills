<?php


use frontend\assets\FormBundle;
use frontend\assets\UserBundle;

/**
 * @var $data
 */
UserBundle::register($this);
FormBundle::register($this)
?>
<div class="table-responsive">
    <table id="table_id" class="display">
        <thead>
        <tr>
            <th>имя</th>
            <th>Место жительства:</th>
            <th>Навыки:</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $item): ?>
            <tr id="<?= $item['id'] ?>">
                <td><?= $item['name'] ?></td>
                <td><?= $item['city'] ?></td>
                <td><?= $item['skill'] ?></td>
                <td>
                    <button class="btn btn-primary update">Изменить</button>
                    <button class="btn btn-danger delete">Удалить</button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>