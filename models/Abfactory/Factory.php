<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/14
 * Time: 下午9:46
 */
namespace Abfactory;

class FactoryModel
{
    public function __construct()
    {
    }

    public function create($modelname)
    {
        return new $modelname();
    }
}