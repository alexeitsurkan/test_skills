<?php namespace frontend\controllers;

use frontend\models\SkillForm;
use Yii;
use yii\web\Controller;

class SkillController extends Controller
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
        $model = new SkillForm();
        return $this->renderAjax('form',[
            'model' => $model,
        ]);
    }

    public function actionCreate()
    {
        $post = Yii::$app->request->post();
        $model = new SkillForm();
        $model->load($post);
        if ($model->create()) {
            return 'true';
        }
    }
}
