<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/11/8
 * Time: 下午9:25
 */
namespace Command\Barbecuer;

use \Command\AbstractModel;

class BakechickenModel extends AbstractModel
{

    /**
     * @return $this \Command\Barbecuer\BakechickenModel
     */
    public function excuteCommand()
    {
        echo $this->receiver . '烤鸡肉';

    }

    public function getName()
    {
        return $this->receiver.'烤鸡翅';
    }
}