<?php namespace frontend\controllers;

use frontend\models\CityForm;
use Yii;
use yii\web\Controller;

class CityController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionForm()
    {
        $model = new CityForm();
        return $this->renderAjax('form',[
            'model' => $model,
        ]);
    }

    public function actionCreate()
    {
        $post = Yii::$app->request->post();
        $model = new CityForm();
        $model->load($post);
        if ($model->create()) {
            return 'true';
        }
    }
}
