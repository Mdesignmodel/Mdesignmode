<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/11
 * Time: 下午11:39
 */
namespace Proxy;

class GirlModel
{
    public $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}