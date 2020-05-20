<?php namespace frontend\models;

use frontend\models\Entity\Skill;
use yii\base\Model;

class SkillForm extends Model
{
    public $name;

    public function rules()
    {
        return [
            ['name', 'required'],
            ['name', 'string'],
        ];
    }

    public function create()
    {
        if ($this->validate()) {
            $user = new Skill();
            $user->name = $this->name;
            return $user->save();
        }
    }
}