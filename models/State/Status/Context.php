<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/6/16
 * Time: 下午10:26
 */
namespace State\Status;

class context
{
    /**
     * @var \State\Status\State
     *
     */
    private $state = null;

    public function __construct($state)
    {
        $this->setState($state);
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function request()
    {
        $this->state->display();
        $this->state->handle($this);
    }
}
