<?php namespace frontend\models\Entity;

use yii\db\ActiveRecord;

/**
 * Class User
 * @package frontend\models\Entity
 * @property $id
 * @property $name
 * @property $city_id
 */
class User extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%user}}';
    }

    public static function all()
    {
        return self::find()->all();
    }
}