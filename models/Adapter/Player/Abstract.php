<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/18
 * Time: 下午4:06
 */
namespace Adapter\Player;

abstract class AbstractModel
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract  function attack();
    abstract  function defense();
}