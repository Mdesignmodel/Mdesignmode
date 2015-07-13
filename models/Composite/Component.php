<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/7/5
 * Time: 下午10:32
 */
namespace Composite;

abstract class Component
{
    /**
     * @var string
     */
    protected $name;

    abstract  function display();
}