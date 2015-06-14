<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/14
 * Time: 下午8:11
 */
namespace Abfactory\Dog;

use \Abfactory\Dog\AbstractModel as DogAbstractModel;

class WhiteModel extends DogAbstractModel
{
    public function eat()
    {
        echo '白狗吃吃';
    }
}
