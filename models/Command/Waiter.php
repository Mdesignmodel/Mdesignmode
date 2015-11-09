<?php
/**
 * 服务员 用于接收命令
 * User: abu
 * Date: 15/10/29
 * Time: 下午4:30
 */
namespace Command;

class WaiterModel
{
    /**
     * 列表
     */
    private $orders = [];

    /**
     * @param $command \Command\AbstractModel
     */
    public function set($command)
    {
        if($command instanceof \Command\Barbecuer\BakechickenModel){
          echo '烤鸡翅没有了'.PHP_EOL;
        }else{
            echo '增加'.$command->getName().' 时间：'. date('Y-m-d H:i:s').PHP_EOL;
            $this->orders[$command->getName()] = $command;
        }
    }

    /**
     * @param $command \Command\AbstractModel
     */
    public function cancel($command)
    {
        unset($this->orders[$command->getName()]);
    }

    /**
     * 通知执行
     */
    public function notify()
    {
        /* @var $command \Command\AbstractModel */
        foreach($this->orders as $command){
            $command->excuteCommand();
        }
    }
}