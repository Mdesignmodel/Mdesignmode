<?php

/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/24
 * Time: 上午10:19
 */
namespace Memento;

class Memento extends AbstractModel
{


    public function __construct()
    {
    }

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
}
