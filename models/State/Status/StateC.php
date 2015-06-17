<?php
/**
 * 下午的状态
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/16
 * Time: 下午3:49
 */
namespace State\Status;

class StateC implements State
{

    /**
     * @param $context \State\Work
     */
    public function handle($context)
    {
        if ($context->getHour() >= 17) {
            if($context->getFinish()){
                $context->setState(new StateF());
            }else{
                $context->setState(new StateD());
            }

        }
    }

    public function display()
    {
        echo '下午状态一般';
    }
}