<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/24
 * Time: 上午10:07
 */
namespace Memento;

class Gamepeople extends AbstractModel
{
    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    public function getActive()
    {
        return $this->active;
    }

    /**
     * 创建备份
     *
     * 只部分备份，也可全部备份
     * @return Memento
     */
    public function createMemento()
    {
        $obj = new Memento();

        $obj->setState($this->state);

//        $obj->setActive($this->active);

        return $obj;
    }

    /**
     * 复原
     */
    public function reset(Memento $memento)
    {
        $this->state = $memento->getState();
//        $this->active = $memento->getActive();
    }

}