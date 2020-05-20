<?php

use frontend\assets\SkillFormBundle;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

SkillFormBundle::register($this);
?>
<?php $form = ActiveForm::begin(['enableClientScript' => false, 'options' => ['enctype' => 'multipart/form-data']]) ?>
    <div class="row">
        <div class="col-sm-12 form-group">
            <label class="col-sm-12 text-left">Навык</label>
            <div class="col-sm-12">
                <?= Html::activeTextInput($model, 'name', [
                    'class' => 'form-control input-sm',
                    'id' => 'name',
                    'type' => 'text',
                ]) ?>
            </div>
        </div>
    </div>

    <div class="row form-group">
        <div class="col-xs-12">
            <button id="sendSkill" type="button" class="btn btn-success">Сохранить</button>
        </div>
    </div>
<?php ActiveForm::end() ?>