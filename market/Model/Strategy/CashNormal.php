<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/8
 * Time: 下午10:37
 */
namespace Market\Strategy;

class CashNormal extends \Market\Strategy
{


    public function acceptCash($price)
    {
        return $price;
    }
}