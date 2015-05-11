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

    public function __construct($numA, $numB)
    {
        $this->numA = $numA;
        $this->numB = $numB;
    }
}