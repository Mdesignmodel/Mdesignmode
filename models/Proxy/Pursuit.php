<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/11
 * Time: 下午10:25
 */
namespace Proxy;

class PursuitModel
{
    public $name;

    public function __construcnt($name)
    {
        $this->name = $name;
    }

    public function GiveDolls()
    {
        echo $this->name . '送洋娃娃';
    }

    public function GiveFlowers()
    {
        echo $this->name . '送花';
    }

    public function GiveChocolate()
    {
        echo $this->name . '送巧克力';
    }
}