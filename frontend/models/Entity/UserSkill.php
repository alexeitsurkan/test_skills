<?php namespace frontend\models\Entity;

use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * Class UserSkill
 * @package frontend\models\Entity
 * @property $id
 * @property $user_id
 * @property $skill_id
 */
class UserSkill extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%user_skill}}';
    }

    public static function all()
    {
        return self::find()->all();
    }

    //скилы пользователя
    public static function getSkill($user_id)
    {
        $data = self::find()->where(['user_id' => $user_id])->all();
        return ArrayHelper::map($data,"id","skill_id");
    }

    //удалить скилы пользователя
    public static function deleteUserSkill($user_id)
    {
        return self::deleteAll(['user_id' => $user_id]);
    }
}