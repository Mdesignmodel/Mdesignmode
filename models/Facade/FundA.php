<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/25
 * Time: 下午5:53
 */
namespace Facade;

class FundAModel
{
    function buy()
    {
        $stockA = new \Facade\StockAModel();
        $stockA->buy();

        $stockC = new \Facade\StockCModel();
        $stockC->buy();
    }


    function sell()
    {
        $stockA = new \Facade\StockAModel();
        $stockA->sell();

        $stockC = new \Facade\StockCModel();
        $stockC->sell();
    }
}