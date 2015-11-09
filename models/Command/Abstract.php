<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/11/8
 * Time: 下午9:07
 */
namespace Command;

abstract class AbstractModel
{
    public $receiver;

    public $bakename;


    public function __construct($receiver)
    {
        $this->receiver = $receiver;
    }

    abstract public function excuteCommand();

    abstract public function getName();
}