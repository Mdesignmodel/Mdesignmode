<?php
/**
 * Created by PhpStorm.
 * User: abu
 * Date: 15/7/13
 * Time: 下午4:28
 */
namespace Iterator;

class Sampleiterator extends Iterator
{
    private $items = [];

    /**
     * @param $a \Iterator\Aggregate
     */
    public function __construct($a)
    {

        $this->items = $a->getArray();
    }

    public function reset()
    {
        reset($this->items);
    }

    public function current()
    {
        return current($this->items);
    }

    public function key()
    {
        return key($this->items);
    }

    public function next()
    {
        return next($this->items);
    }

    public function valid()
    {
        return ($this->current() !== false);
    }


}