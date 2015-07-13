<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/18
 * Time: 下午4:04
 */
namespace Adapter\Player;

class Forwards extends AbstractModel
{

    public function Attack()
    {
        echo '前锋'.$this->name.'进攻';
    }

    public function Defense()
    {
        echo '前锋'.$this->name.'防守';
    }

}