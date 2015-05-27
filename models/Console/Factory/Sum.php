<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/13
 * Time: 下午9:22
 */
namespace Console\Factory;

class SumModel implements \Console\FactoryModel
{
    public function createOperation()
    {
        return new \Console\Operation\SumModel();
    }
}