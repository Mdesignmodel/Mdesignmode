<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/24
 * Time: 上午10:24
 */
namespace Memento;

class Caretaker
{
    private $memento;

    public function setMemento($obj)
    {
        $this->memento = $obj;
    }

    /**
     * @return \Memento\Memento
     */
    public function getMemento()
    {
        return $this->memento;
    }
}