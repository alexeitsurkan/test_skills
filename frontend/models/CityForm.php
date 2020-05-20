<?php namespace frontend\models;

use frontend\models\Entity\City;
use yii\base\Model;

class CityForm extends Model
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
            $user = new City();
            $user->name = $this->name;
            return $user->save();
        }
    }
}