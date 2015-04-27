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

namespace console;

class Math
{
    protected $sign = '';
    protected $numA = 0;
    protected $numB = 0;

    public function __construct($sign, $numA, $numB)
    {
        $this->sign = $sign;
        $this->numA = $numA;
        $this->numB = $numB;
    }

    public function compute()
    {
        switch ($this->sign) {
            case '+':
                return $this->sum();
                break;
            case '-':
                return $this->subtract();
                break;
            case '*':
                return $this->multiply();
                break;
            case'/':
                return $this->division();
                break;
            default:
                break;
        }
        return true;
    }

    /**
     * 加
     */
    protected function sum()
    {
        return $this->numA + $this->numB;
    }

    /**
     * 减
     */
    protected function subtract()
    {
        return $this->numA - $this->numB;
    }

    /**
     * 乘
     */
    protected function multiply()
    {
        return $this->numA * $this->numB;
    }

    /**
     * 除
     */
    protected function division()
    {
        if (0 == $this->numB) {
            throw new \Exception('被除数不能为0');
        }

        return $this->numA / $this->numB;
    }

}