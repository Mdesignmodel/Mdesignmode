<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/4
 * Time: 下午10:55
 */
namespace Observer\People;

use Observer\PeopleModel as PeopleInterface;
class BoyModel implements   PeopleInterface
{
    public function update()
    {
        echo '男生举手';
    }
}