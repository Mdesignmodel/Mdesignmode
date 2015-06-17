<?php
/**
 * 早上的状态
 * Created by PhpStorm.
 * User:abu
 * Date: 15/6/16
 * Time: 下午3:49
 */
namespace State\Status;

class StateA implements State
{

    /**
     * @param $context \State\Work
     */
    public function handle($context)
    {
        if($context->getHour()>12){
            $context->setState(new StateB());
        }
    }

    public function display()
    {
        echo '早上状态好';
    }
}