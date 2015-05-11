<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/8
 * Time: 下午10:33
 */

namespace Market;

abstract class Strategy
{
    protected $price;
    abstract  public function acceptCash($price);

}