<?php
/**
 * 输入商品信息和数据 获取总价
 */

namespace Decorator;
class PlatformController
{
    public function Show()
    {
        $concrete = new \Decorator\ConcreteComponent();
        $cA = new \Decorator\Decorator\ConcreteA();
        $cB = new \Decorator\Decorator\ConcreteB();

        /*装饰过程*/
        $cA->setComponent($concrete);
        $cB->setComponent($cA);
        $cB->Operation();

    }

}