<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/7/9
 * Time: 下午11:17
 */

namespace Iterator;


abstract class Iterator
{
    /**
     * 当前位置的值
     * @return mixed
     */
    abstract public function  current();

    /**
     * 当前位置的KEY
     */
    abstract public function key();

    /**
     * 下一个位置
     */
    abstract public function next();

    /**
     * 是否有效
     */
    abstract public function  valid();

    /**
     * 重置
     */
    abstract public function reset();


}