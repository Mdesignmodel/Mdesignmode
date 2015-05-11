<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/8
 * Time: 下午10:37
 */
namespace Market\Strategy;

class CashReturnModel extends \Market\Strategy
{

    private $total;
    private $sub;

    public function __construct($total,$sub)
    {
        $this->total = $total;
        $this->sub = $sub;
    }


    public function acceptCash($price)
    {
        if ($price >= $this->total) {
            return $price - $this->sub;
        }
        return $price;
    }
}