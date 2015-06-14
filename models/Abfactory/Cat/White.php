<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/14
 * Time: 下午8:11
 */
namespace Abfactory\Cat;

use \Abfactory\Cat\AbstractModel as CatAbstractModel;

class WhiteModel extends CatAbstractModel
{
    public function eat()
    {
        echo '白猫吃吃';
    }
}
