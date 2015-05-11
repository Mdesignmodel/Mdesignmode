<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/10
 * Time: 下午10:45
 */

namespace Decorator\Decorator;

class ConcreteA extends \Decorator\Decorator
{
    protected $addedState;
    public function Operation()
    {
        parent::Operation();
        $this->addedState = 'New State';
        echo '具体装饰对象A的操作';
    }
}