<?php

use frontend\assets\FormBundle;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var $model
 * @var $action
 * @var $dic_skill
 * @var $dic_city
 */
FormBundle::register($this);
$this->registerJs(
    'var action= "' . $action . '"; '
    , yii\web\View::POS_HEAD);
?>

<?php $form = ActiveForm::begin(['enableClientScript' => false, 'options' => ['enctype' => 'multipart/form-data']]) ?>
<?= Html::activeHiddenInput($model, 'id') ?>
<div class="row">
    <div class="col-sm-12 form-group">
        <label class="col-sm-12 text-left">Имя пользователя</label>
        <div class="col-sm-12">
            <?= Html::activeTextInput($model, 'name', [
                'class' => 'form-control input-sm',
                'id' => 'name',
                'type' => 'text',
            ]) ?>
        </div>
    </div>
    <div class="col-sm-12 form-group">
        <label class="col-sm-12 text-left">Метсо жительства:</label>
        <div class="col-sm-12">
            <?= Html::activeDropDownList($model, 'city', $dic_city, [
                'class' => 'form-control',
                'id' => 'city',
                'prompt' => 'выберите...'
            ]) ?>
        </div>
    </div>
    <div class="col-sm-12 form-group">
        <label class="col-sm-12 text-left">Навыки:</label>
        <div class="col-sm-12">
            <?= Html::activeDropDownList($model, 'skill', $dic_skill, [
                'class' => 'form-control',
                'id' => 'skill',
                'multiple' => true,
                'prompt' => 'выберите...',
            ]) ?>
        </div>
    </div>
</div>

<div class="row form-group">
    <div class="col-xs-12">
        <button id="sendForm" type="button" class="btn btn-success">Сохранить</button>
    </div>
</div>
<?php ActiveForm::end() ?>









