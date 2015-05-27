<?php

/**
 * 数学公式计算
 *
 *
 * Created by PhpStorm.
 * User: abu
 * Date: 15/4/16
 * Time: 上午10:40
 */

namespace Console;

class OperationModel
{
    protected $numA = 0;
    protected $numB = 0;

    public function __construct()
    {
    }

    public function setNumA($numA)
    {
        $this->numA = $numA;
    }

     public function setNumB($numB)
    {
        $this->numB = $numB;
    }

}