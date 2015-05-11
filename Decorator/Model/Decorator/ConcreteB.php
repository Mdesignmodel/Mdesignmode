<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/10
 * Time: 下午10:45
 */

namespace Decorator\Decorator;

class ConcreteB extends \Decorator\Decorator
{
    protected $addedState;
    public function Operation()
    {
        parent::Operation();
        $this->AddedBehavior();
        echo "具体装饰对象B的操作";

    }

    protected function AddedBehavior()
    {

    }
}