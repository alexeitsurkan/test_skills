<?php


use frontend\assets\UserFormBundle;
use frontend\assets\UserBundle;

/**
 * @var $data
 */
UserBundle::register($this);
UserFormBundle::register($this)
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
                <td class="text-right">
                    <button class="btn btn-primary update" title="Изменить"><i class="fas fa-pencil-alt"></i></button>
                    <button class="btn btn-danger delete" title="Удалить"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>