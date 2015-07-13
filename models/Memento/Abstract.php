<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/24
 * Time: 上午10:41
 */
namespace Memento;

abstract class AbstractModel
{
    protected $state;
    protected $active;

    Abstract public function setState($state);
    Abstract public function getState();

    Abstract public function setActive($active);
    Abstract public function getActive();

}