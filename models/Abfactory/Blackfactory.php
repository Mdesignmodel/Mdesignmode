<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/14
 * Time: 下午9:07
 */
namespace Abfactory;

use \Abfactory\Dog\BlackModel as BlackDogModel;
use \Abfactory\Cat\BlackModel as BlackCatModel;

class BlackfactoryModel
{
    public function creatCat()
    {
        return new BlackCatModel();
    }

    public function creatDog()
    {
        return new BlackDogModel();
    }

}