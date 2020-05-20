<?php namespace frontend\models\Entity;

use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

class City extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%city}}';
    }

    public static function all()
    {
        return self::find()->all();
    }

    public static function getDic()
    {
        return ArrayHelper::map(self::all(),"id","name");
    }

    public static function randomId()
    {
        $res = self::all();
        return $res[rand(0,count($res)-1)]['id'];
    }
}