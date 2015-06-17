<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/16
 * Time: 下午3:45
 */
namespace State\Status;

interface  State
{
    /**
     * 判断是否切换
     * @param $context
     * @return mixed
     */
    public function handle($context);

    /**
     * 当前状态
     * @return mixed
     */
    public function display();
}