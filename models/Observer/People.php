<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/4
 * Time: 下午10:56
 */
namespace Observer;

abstract class PeopleModel
{
    public $name;
    abstract public function update();
    public function test()
    {

    }
}