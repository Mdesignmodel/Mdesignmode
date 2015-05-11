<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/8
 * Time: 下午10:31
 */
namespace Market;
class Context
{
    public $strategy;

    /**
     * 简单工厂模式
     * @param $active
     */
    public function __construct($active)
    {

        switch($active){
            case 1:
                $this->strategy = new \Market\Strategy\CashRebateModel(0.8);
                break;
            case 2:
                $this->strategy = new \Market\Strategy\CashRebateModel(100,10);
                break;
            default:
                $this->strategy = new \Market\Strategy\CashNormalModel();
                break;
        }
    }

    /**
     * 策略模式
     * @param $ratPrice
     * @return mixed
     */
    public function getResult($ratPrice)
    {
        return $this->strategy->acceptCash($ratPrice);
    }


}