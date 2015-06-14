<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/14
 * Time: 下午9:07
 */
namespace Abfactory;
class FactoryModel
{
    public function create($model)
    {
        return new $model();
    }
}