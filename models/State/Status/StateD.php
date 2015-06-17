<?php
/**
 * 晚上的状态
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/16
 * Time: 下午3:49
 */
namespace State\Status;

class StateD implements State
{

    /**
     * @param $context \State\Work
     */
    public function handle($context)
    {
        if ($context->getHour() >= 21) {
            $context->setState(new StateE());
        }
    }

    public function display()
    {
        echo '晚上效率差';
    }
}