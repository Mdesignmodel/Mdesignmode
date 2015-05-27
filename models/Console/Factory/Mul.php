<?php
/**
 * 乘法运算
 * Created by PhpStorm.
 * User: abu
 * Date: 15/4/27
 * Time: 下午8:57
 */
namespace Console\Factory;

class MulModel implements \Console\FactoryModel
{
    public function createOperation()
    {
        return new \Console\Operation\MulModel();
    }
}
