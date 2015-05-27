<?php
/**
 *
 * 由于Pursuit 不认识Girl类.所以需要通过代理来实现。 但是需要提供花 洋娃娃等
 *
 * 为保证 代理类和被代理类 的方法相同，需要共同继承一个接口。
 * 有时候也可以不必保持这种一致性。 所以继承接口的动作可有可无。
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/11
 * Time: 下午10:25
 */
namespace Proxy;

class PursuitModel implements \Proxy\Givegift
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function GiveDolls()
    {
        echo '给'.$this->name . '送洋娃娃';
    }

    public function GiveFlowers()
    {
        echo '给'.$this->name . '送花';
    }

    public function GiveChocolate()
    {
        echo '给'.$this->name . '送巧克力';
    }
}