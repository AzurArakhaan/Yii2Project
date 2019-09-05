<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\DonerModel;

class DonerController extends Controller
{
    public function actionIndex()
    {
        $option = DonerModel::attributeLabels();
        return $this->render('index',[
            'option' => $option,
        ]);
    }
}
