<?php

/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/16
 * Time: 下午2:28
 */
namespace State;

class Work
{

    /**
     * @var \State\Status\State
     */
    private $state = null;

    /**
     * 当前时间
     * @var
     */
    protected $hour;

    /**
     * 工作完成情况
     * @param $hour
     */
    protected $finish = false;

    public function __construct()
    {

    }

    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    public function getHour()
    {
        return $this->hour;
    }

    public function setFinish($c)
    {
        $this->finish = $c;
    }

    public function getFinish()
    {
        return $this->finish;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function request()
    {
        /*更新了state*/
        $this->state->handle($this);
        $this->state->display();
    }
}