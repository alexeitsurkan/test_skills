<?php namespace frontend\controllers;


use frontend\helper\UserHelper;
use frontend\models\Entity\City;
use frontend\models\Entity\RussianName;
use frontend\models\Entity\Skill;
use frontend\models\Entity\User;
use frontend\models\Entity\UserSkill;
use frontend\models\UserControl;
use frontend\models\UserModel;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class UserController extends Controller
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

    public function actionIndex()
    {
        $data = UserModel::GetUserList();
        return $this->renderAjax('index',[
            'data'=> $data,
        ]);
    }
    public function actionForm($id = null)
    {
        $action = 'create';
        $model = new UserControl();
        if (!empty($id)) {
            $action = 'update';
            $user = User::findOne($id);
            if (!empty($user)) {
                    $model->id = $id;
                    $model->name = $user['name'];
                    $model->city = $user['city_id'];
                    $model->skill = UserSkill::getSkill($id);
            }
        }
        $dic_skill = Skill::getDic();
        $dic_city = City::getDic();
        return $this->renderAjax('form', [
            'model' => $model,
            'dic_skill' => $dic_skill,
            'dic_city' => $dic_city,
            'action' => $action,
        ]);
    }

    public function actionCreate()
    {
        $post = Yii::$app->request->post();
        $model = new UserControl(['scenario' => UserControl::CREATE]);
        $model->load($post);
        if($model->create()){
            return 'true';
        }
    }

    public function actionUpdate()
    {
        $post = Yii::$app->request->post();
        $model = new UserControl(['scenario' => UserControl::UPDATE]);
        $model->load($post);
        if($model->update()){
            return 'true';
        }
    }

    //удаление пользователя
    public function actionDelete($id)
    {
        return UserModel::delete((int)$id);
    }

    public function actionCreateRandom()
    {
        $model = new UserControl(['scenario' => UserControl::CREATE]);
        $model->name = RussianName::randomName();
        $model->city = City::randomId();
        $model->skill = [Skill::randomId()];
        if($model->create()){
            return 'true';
        }
    }
}
