<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/18
 * Time: 下午4:04
 */
namespace Adapter\Player;

class Center extends AbstractModel
{

    public function Attack()
    {
        echo '中锋'.$this->name.'进攻';
    }

    public function Defense()
    {
        echo '中锋'.$this->name.'防守';
    }

}