<?php
/**
 * 除法运算
 * Created by PhpStorm.
 * User: abu
 * Date: 15/4/27
 * Time: 下午8:59
 */
namespace Console\Operation;

class DivModel extends \console\OperationModel
{
    public function getResult()
    {
        if (0 == $this->numB) {
            throw new \Exception('被除数不能为0');
        }

        return $this->numA / $this->numB;
    }
}