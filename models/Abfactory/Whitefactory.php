<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/14
 * Time: 下午9:07
 */
namespace Abfactory;

use \Abfactory\Dog\WhiteModel as WhiteDogModel;
use \Abfactory\Cat\WhiteModel as WhiteCatModel;

class WhitefactoryModel
{
    public function creatCat()
    {
        return new WhiteCatModel();
    }

    public function creatDog()
    {
        return new WhiteDogModel();
    }

}