<?php

namespace app\models;

use Yii;
use yii\base\Model;

class RomaModel extends Model
{
    public function attributeLabels()
    {
        return $roma = array(
        	"test1"=>'text1',
        	"test2"=>'text2'
        );
    }
}
