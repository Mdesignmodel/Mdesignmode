<?php
/**
 * 中午的状态
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/16
 * Time: 下午3:49
 */
namespace State\Status;

class StateB implements State
{

    /**
     * @param $context \State\Work
     */
    public function handle($context)
    {
        if($context->getHour()>13){
            $context->setState(new StateC());
        }
    }

    public function display()
    {
        echo '中午休息';
    }
}