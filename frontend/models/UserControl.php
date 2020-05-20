<?php namespace frontend\models;

use frontend\models\Entity\User;
use frontend\models\Entity\UserSkill;
use yii\base\Model;

/**
 * Class UserControl
 * @package frontend\models
 * @property $id
 * @property $name
 * @property $city
 * @property $skill
 */
class UserControl extends Model
{
    public $id;
    public $name;
    public $city;
    public $skill = [];

    const CREATE = 'create';
    const UPDATE = 'update';

    public function scenarios()
    {
        return [
            self::CREATE => [
                'name',
                'city',
                'skill',
            ],
            self::UPDATE => [
                'id',
                'name',
                'city',
                'skill',
            ],
        ];
    }

    public function rules()
    {
        return [

            [
                [
                    'name',
                    'city',
                    'skill'
                ], 'required'
            ],
            ['id', 'integer'],
            ['name', 'string'],
            ['city', 'integer'],
            ['skill', 'each', 'rule' => ['integer']],
        ];
    }

    public function create()
    {
        if ($this->validate()) {
            $transaction = \Yii::$app->getDb()->beginTransaction();
            try {
                $user = new User();
                $user->name = $this->name;
                $user->city_id = $this->city;
                $user->save();

                foreach ($this->skill as $skill_id) {
                    $skill = new UserSkill();
                    $skill->user_id = $user->id;
                    $skill->skill_id = $skill_id;
                    $skill->save();
                }

            } catch (\Exception $e) {
                $transaction->rollBack();
                return false;
            }
            $transaction->commit();
            return true;
        }
    }

    public function update()
    {
        if ($this->validate()) {
            $transaction = \Yii::$app->getDb()->beginTransaction();
            try {
                $user = User::findOne($this->id);
                $user->name = $this->name;
                $user->city_id = $this->city;
                $user->save();
                UserSkill::deleteUserSkill($user->id);

                foreach ($this->skill as $skill_id) {
                    $skill = new UserSkill();
                    $skill->user_id = $user->id;
                    $skill->skill_id = $skill_id;
                    $skill->save();
                }

            } catch (\Exception $e) {
                $transaction->rollBack();
                return false;
            }
            $transaction->commit();
            return true;
        }
    }
}