<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/4
 * Time: 下午10:55
 */
namespace Observer\People;

use Observer\PeopleModel as PeopleAbsract;

class GirlModel extends PeopleAbsract
{
    public function __constract()
    {

    }

    public function update()
    {
        $this->name = 'ccc';
        echo $this->name . '女生抬脚';
    }
}