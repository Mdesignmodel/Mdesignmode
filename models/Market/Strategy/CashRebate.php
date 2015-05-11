<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/8
 * Time: 下午10:37
 */
namespace Market\Strategy;

class CashRebateModel extends \Market\Strategy
{
    private $discount;

    public function __construct($discount)
    {
        $this->discount = $discount;
    }


    public function acceptCash($price)
    {
        return $price * $this->discount;
    }
}