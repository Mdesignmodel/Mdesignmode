<?php
/**
 * 减法运算
 * Created by PhpStorm.
 * User: abu
 * Date: 15/4/27
 * Time: 下午8:52
 */

namespace Console\Operation;

class SubModel extends \console\OperationModel
{
    public function getResult()
    {
        return $this->numA - $this->numB;
    }
}