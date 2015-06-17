<?php
/**
 * 加班到21后的状态
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/16
 * Time: 下午3:49
 */
namespace State\Status;

class StateE implements State
{

    /**
     * @param $context \State\Work
     */
    public function handle($context)
    {
    }

    public function display()
    {
        echo '太困了 睡了';
    }
}