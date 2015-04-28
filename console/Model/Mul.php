<?php
/**
 * 乘法运算
 * Created by PhpStorm.
 * User: abu
 * Date: 15/4/27
 * Time: 下午8:57
 */
namespace Console\Operation;

class MulModel extends \console\OperationModel
{
    public function getResult()
    {
        return $this->numA * $this->numB;
    }
}
