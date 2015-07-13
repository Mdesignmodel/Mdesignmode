<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/18
 * Time: 下午4:04
 */
namespace Adapter\Player;

class Foreigncenter
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function jinggong()
    {
        echo '外籍中锋'.$this->name.'进攻';
    }

    public function fanzou()
    {
        echo '外籍中锋'.$this->name.'防守';
    }

}