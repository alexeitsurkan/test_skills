<?php namespace frontend\models;

use frontend\models\Entity\User;
use yii\db\Query;

class UserModel
{
    public static function GetUserList()
    {
        $query = new Query();
        return $query->select([
            'user.id AS id',
            'user.name AS name',
            'city.name AS city',
            'group_concat(skill.name) AS skill',
        ])
            ->from([
                'user'
            ])
            ->join('LEFT JOIN', 'city', 'city.id = user.city_id')
            ->join('LEFT JOIN', 'user_skill', 'user.id = user_skill.user_id')
            ->join('LEFT JOIN', 'skill', 'user_skill.skill_id = skill.id')
            ->groupBy('user.id')
            ->orderBy('user.id DESC')
            ->all();
    }

    public static function GetUser($id)
    {
        $query = new Query();
        return $query->select([
            'user.id AS id',
            'user.name AS name',
            'city.name AS city',
            'group_concat(skill.name) AS skill',
        ])
            ->from([
                'user'
            ])
            ->join('LEFT JOIN', 'city', 'city.id = user.city_id')
            ->join('LEFT JOIN', 'user_skill', 'user.id = user_skill.user_id')
            ->join('LEFT JOIN', 'skill', 'user_skill.skill_id = skill.id')
            ->andWhere(['news_id' => $id])
            ->one();
    }



    public static function delete($id)
    {
        return User::findOne(['id'=>$id])->delete();
    }
}