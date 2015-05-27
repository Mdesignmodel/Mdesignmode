<?php
/**
 * 除法运算
 * Created by PhpStorm.
 * User: abu
 * Date: 15/4/27
 * Time: 下午8:59
 */
namespace Console\Factory;

class DivModel implements \Console\FactoryModel
{
    public function createOperation()
    {
        return new \Console\Operation\DivModel();
    }
}