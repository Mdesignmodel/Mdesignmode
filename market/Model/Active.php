<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/5/7
 * Time: 下午9:42
 */

namespace Market;

class ActiveModel
{
    protected $code = '';

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getAction()
    {
        return 1;
    }




}