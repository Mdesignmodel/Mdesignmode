<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/11/8
 * Time: 下午9:25
 */
namespace Command\Barbecuer;

use \Command\AbstractModel;

class BakemuttonModel extends AbstractModel
{
    /**
     * @return $this \Command\Barbecuer\BakemuttonModel
     */
    public function excuteCommand()
    {
        echo $this->receiver . '烤羊肉串';

        return $this;
    }

    public function getName()
    {
        return $this->receiver.'烤羊肉串';
    }

}