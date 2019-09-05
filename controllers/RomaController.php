<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\RomaModel;

class RomaController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'apishablon';
        $option = RomaModel::attributeLabels();
        return $this->render('index',compact('option'));
    }
}
