<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/14
 * Time: 下午8:11
 */
namespace Abfactory\Dog;
use \Abfactory\IdogModel;

class BlackModel extends IdogModel
{
    public function eat()
    {
        echo '吃吃';
    }
}
