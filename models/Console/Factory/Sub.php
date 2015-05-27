<?php
/**
 * 减法运算
 * Created by PhpStorm.
 * User: abu
 * Date: 15/4/27
 * Time: 下午8:52
 */

namespace Console\Factory;

class SubModel implements \Console\FactoryModel
{
    public function createOperation()
    {
        return new \Console\Operation\SubModel();
    }
}