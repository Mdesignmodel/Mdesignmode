<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/10
 * Time: 下午10:39
 */

namespace Decorator;

class ConcreteComponent extends \Decorator\Component
{
    public function Operation()
    {
        echo "具体对象的操作";
    }
}