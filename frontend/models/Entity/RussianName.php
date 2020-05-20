<?php namespace frontend\models\Entity;

use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

class RussianName extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%russian_names}}';
    }

    public static function count()
    {
        return self::find()->count();
    }

    public static function all()
    {
        return self::find()->all();
    }

    public static function getDic()
    {
        return ArrayHelper::map(self::all(),"id","name");
    }

    public static function randomName()
    {
        while(1){
            $count = self::count();
            $r_id = rand(0,$count-1);
            $r = self::findOne($r_id);
            if($r){
                return $r['name'];
            }
        }
    }
}