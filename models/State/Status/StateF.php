<?php
/**
 * 下班状态
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/16
 * Time: 下午3:49
 */
namespace State\Status;

class StateF implements State
{

    /**
     * @param $context \State\Work
     */
    public function handle($context)
    {
    }

    public function display()
    {
        echo '工作完成 下班';
    }
}